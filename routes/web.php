<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\TopController;

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

        
    });

    // for displaying ADMIN/ GENRE MANAGEMENT
    Route::get('/genres', [GenreController::class, 'index'])->name('genres');
    Route::post('/genres/store', [GenreController::class, 'store'])->name('genres.store');
    Route::patch('/genres/{genre}/update', [GenreController::class, 'update'])->name('genres.update');
    Route::delete('/genres/{genre}/destroy', [GenreController::class, 'destroy'])->name('genres.destroy');


});
    // for displaying PLAN DETAILS
    Route::get('/plans', [PlanController::class, 'showPlanInfo'])->name('plans');
    