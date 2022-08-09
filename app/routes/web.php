<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
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

    Route::get('/', [MainController::class, 'index'])->name('main');

    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::get('about', [AboutController::class, 'index'])->name('about');

    Route::get('catalog', [CatalogController::class, 'index'])->name('catalog');

    Route::get('contacts', [ContactsController::class, 'index'])->name('contacts');

});