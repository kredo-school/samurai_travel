<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GenreController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\KeywordController;
=======
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\TopController;
>>>>>>> main

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){

    # For Admin
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function(){
        # Admin Top
        Route::get('/top', [TopController::class, 'top'])->name('top');
        # Admin User Register
        Route::get('/register', [RegisterController::class, 'register'])->name('register');
        Route::post('/store', [RegisterController::class, 'store'])->name('store');
        Route::get('/keywords', [KeywordController::class, 'index'])->name('keywords');
        Route::get('/keywords/create', [KeywordController::class, 'create'])->name('keywords.create');
        Route::post('/keywords/store', [KeywordController::class, 'store'])->name('keywords.store');
        Route::get('/keywords/edit/{id}', [KeywordController::class, 'edit'])->name('keywords.edit');
        Route::patch('/keywords/{id}/update', [KeywordController::class,'update'])->name('keywords.update');
        Route::delete('/keywords/{id}/destroy', [KeywordController::class, 'destroy'])->name('keywords.destroy');
    });

    // for displaying ADMIN/ GENRE MANAGEMENT
    Route::get('/genres', [GenreController::class, 'index'])->name('genres');
    Route::post('/genres/store', [GenreController::class, 'store'])->name('genres.store');
    Route::patch('/genres/{genre}/update', [GenreController::class, 'update'])->name('genres.update');
    Route::delete('/genres/{genre}/destroy', [GenreController::class, 'destroy'])->name('genres.destroy');
});
