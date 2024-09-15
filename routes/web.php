<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('home', function () {
    return view('home');
});


Route::get('/ourservices', function () {
    return view('ourservices');
});

Route::get('/testlayout', function () {
    return view('testlayout');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/register_user', function () {
    return view('register_user');
});

Route::get('/report_repair', function () {
    return view('report_repair');
});
