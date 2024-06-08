<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data=[
        'greetings' => "Laravel-Vite template",
    ];
    return view('home', $data);
})->name('home');

Route::get('/women-shop', function () {
    $data=[
        'greetings' => "Laravel-Vite template",
    ];
    return view('woman', $data);
})->name('woman');


Route::get('/men-shop', function () {
    $data=[
        'greetings' => "Laravel-Vite template",
    ];
    return view('man', $data);
})->name('man');

Route::get('/kids-shop', function () {
    $data=[
        'greetings' => "Laravel-Vite template",
    ];
    return view('kid', $data);
})->name('kid');