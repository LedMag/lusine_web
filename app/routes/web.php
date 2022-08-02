<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/en/home');

Route::group(['prefix' => '{language}'], function () {
    Route::get('home', function () {
        return view('home');
    });
    Route::get('category', function () {
        return view('category');
    });
    Route::get('about', function () {
        return view('about');
    });
    Route::get('contacts', function () {
        return view('contacts');
    });
});