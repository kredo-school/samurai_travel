<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GenreController;

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
Route::patch('/genres/{id}/update', [GenreController::class, 'update'])->name('genres.update');
Route::delete('/genres/{id}/destroy', [GenreController::class, 'destroy'])->name('genres.destroy');


