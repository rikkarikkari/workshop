<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');   // product.blade.php
})->name('product.page');

Route::get('/login', function () {
    return view('login');
})->name('login.page');

Route::get('/register', function () {
    return view('register');
})->name('register.page');

Route::get('/admin', function () {
    return view('admin');
})->name('admin.page');

Route::get('/user', function () {
    return view('user');
})->name('user.page');
