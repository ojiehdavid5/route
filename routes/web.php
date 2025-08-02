<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome'); // default
});

Route::get('/greet', [PageController::class, 'greet']);
Route::get('/user/{name}', function ($name) {
    return "Welcome, $name!";
});
//Route with Parameters
Route::get('/user/{name}', function ($name) {
    return "Welcome, $name!";
});
// Route with Optional Parameter
Route::get('/post/{id?}', function ($id = null) {
    return "Post ID: " . ($id ?? 'Not Provided');
});


// Named Routes
Route::get('/dashboard', function () {
    return 'This is the dashboard.';
})->name('dashboard');


// Route with Prefix
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'Admin Users';
    });

    Route::get('/settings', function () {
        return 'Admin Settings';
    });
});
Route::view('/about', 'welcome');


Route::get('/students', [StudentController::class, 'index']);


Route::get('/register', [StudentController::class, 'create']);
Route::post('/register', [StudentController::class, 'store']);


// Route::fallback(function () {
//     return 'Page not found!';
// });
