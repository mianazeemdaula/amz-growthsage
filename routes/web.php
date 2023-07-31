<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\student\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    if (Auth::check()) {
        //if authenticated, attach semesters
        return view('student.index');
    } else {
        return view('web.index');
    }
});

Route::view('courses', 'web.courses');
Route::view('courses.view', 'student.courses');

Route::view('blogs', 'web.blogs');
Route::view('about', 'web.about');
Route::view('contact', 'web.contact');
Route::view('register', 'web.register');
Route::view('login', 'web.login');
Route::post('login', [AuthController::class, 'login']);
Route::get('signout', [AuthController::class, 'signout'])->name('signout');

Route::resource('subscribers', SubscriberController::class)->only('store');
Route::resource('registration', RegistrationController::class);
Route::resource('queries', QueryController::class);
Route::resource('users', UserController::class);
Route::resource('students', StudentController::class);

Route::get('blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('home', function ($id) {
});

Route::resource('registration', RegistrationController::class);
