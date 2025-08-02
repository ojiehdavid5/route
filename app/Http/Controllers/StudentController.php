<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //

    public function create()
    {
        return view('students.register');
    }
     public function store(Request $request)
    {
        // ✅ Validate form input
        $validated = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email|unique:students,email',
            'age' => 'required|numeric|min:10',
        ]);

        // ✅ Store in database
        Student::create($validated);

        return redirect('/register')->with('success', 'Student registered!');
    }
    public function index(){
        $students = Student::all();
        return view("students.index",compact("students"));
    }
}
