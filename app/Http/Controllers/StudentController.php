<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Inertia\Inertia;

class StudentController extends Controller
{
    //

    public function create()
    {
        return Inertia::render('Students/Register');
    }
     public function store(Request $request)
    {
        // ✅ Validate form input
        $validated = $request->validate([
'name' => 'required|string|min:2',
    'email' => 'required|email', // temporarily removed unique
    'age' => 'required|numeric|min:10',
        ]);

        // ✅ Store in database
        Student::create($validated);

        return redirect()->route('register')->with('success', 'Student registered!');
    }
    public function index(){
        $students = Student::all();
        return view("students.index",compact("students"));
    }
}