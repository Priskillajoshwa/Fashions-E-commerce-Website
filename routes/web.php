<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});






Route::post('/login','App\Http\Controllers\Logincontroller@login');

Route::post('/reg','App\Http\Controllers\Logincontroller@reg');



Route::get('/add', function () {
    return view('addproduct');
});
  
Route::get('/view','App\Http\Controllers\Logincontroller@view');
Route::get('/dashboard','App\Http\Controllers\Logincontroller@dashboard');
Route::get('/dashboard', [Logincontroller::class, 'dashboard'])->name('dashboard');
