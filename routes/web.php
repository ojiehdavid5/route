<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
