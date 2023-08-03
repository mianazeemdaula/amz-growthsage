<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\student\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseEnrollmentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->hasRole('student'))
            return redirect('students');
    } else {
        return view('index');
    }
});

Route::view('web/courses', 'web.courses');
Route::view('web/blogs', 'web.blogs');
Route::get('blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::view('web/about', 'web.about');
Route::view('web/contact', 'web.contact');
Route::view('web/register/{code?}', 'web.register');
Route::view('web/login', 'web.login');
Route::post('web/login', [AuthController::class, 'login']);
Route::get('signout', [AuthController::class, 'signout'])->name('signout');

Route::resource('subscribers', SubscriberController::class)->only('store');

Route::resource('registration', RegistrationController::class);

Route::resource('queries', QueryController::class);
Route::resource('users', UserController::class);




Route::group(['middleware' => ['role:student']], function () {
    Route::resource('students', StudentController::class);
    Route::resource('enrollments', EnrollmentController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::get('invoice/proof/{enrollment_id}', [InvoiceController::class, 'uploadProof']);
    Route::view('student/change/pw', 'student.change_password');
    Route::post('student/change/pw', [StudentController::class, 'changePassword'])->name('student.change_password');
});

// Route::get('home', function ($id) {
// });
