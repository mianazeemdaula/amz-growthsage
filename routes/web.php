<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('web.index');
});

Route::view('blog', 'web.blog');
Route::view('about', 'web.about');
Route::view('contact', 'web.contact');

Route::get('home', function ($id) {
});
