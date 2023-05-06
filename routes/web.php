<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\KeywordController;

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

// for displaying ADMIN/ GENRE MANAGEMENT
Route::get('/genres', [GenreController::class, 'index'])->name('genres');
Route::post('/genres/store', [GenreController::class, 'store'])->name('genres.store');
Route::patch('/genres/{genre}/update', [GenreController::class, 'update'])->name('genres.update');
Route::delete('/genres/{genre}/destroy', [GenreController::class, 'destroy'])->name('genres.destroy');



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    #KEYWORDS
    Route::get('/keywords', [KeywordController::class, 'index'])->name('keywords');
    Route::get('/keywords/create', [KeywordController::class, 'create'])->name('keywords.create');
    Route::post('/keywords/store', [KeywordController::class, 'store'])->name('keywords.store');
    Route::get('/keywords/edit/{id}', [KeywordController::class, 'edit'])->name('keywords.edit');
    Route::patch('/keywords/{id}/update', [KeywordController::class,'update'])->name('keywords.update');
    Route::delete('/keywords/{id}/destroy', [KeywordController::class, 'destroy'])->name('keywords.destroy');

});