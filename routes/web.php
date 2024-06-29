<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/dashboard', function () {
    return view('auth.dashboard');
});

Route::get('/type', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
