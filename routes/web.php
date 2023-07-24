<?php

use App\Http\Controllers\web\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('web.index');
});

Route::view('courses', 'web.courses');
Route::view('blogs', 'web.blogs');
Route::view('about', 'web.about');
Route::view('contact', 'web.contact');
Route::view('register', 'web.register');

Route::get('blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('home', function ($id) {
});
