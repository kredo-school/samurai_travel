<?php

use App\Http\Controllers\TopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\TopController as AdminTopController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\TopController::class, 'index'])->name('top');

Route::group(['middleware' => 'auth'], function(){

    # For Admin
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function(){
        # Admin Top
        Route::get('/top', [AdminTopController::class, 'top'])->name('top');
        # Admin User Register
        Route::get('/register', [RegisterController::class, 'register'])->name('register');
        Route::post('/store', [RegisterController::class, 'store'])->name('store');
    });
});
