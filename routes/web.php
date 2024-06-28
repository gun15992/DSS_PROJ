<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/type', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
