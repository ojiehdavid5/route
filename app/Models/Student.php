<?php

// app/Models/Student.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // ✅ Add this to allow mass assignment
    protected $fillable = ['name', 'email', 'age'];
      protected $table = 'people';
}
?>
