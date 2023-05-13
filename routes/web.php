<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\TopController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\PlaceImageController;

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

#PLACE
Route::get('/places',[PlaceController::class, 'index'])->name('place.index');
Route::get('/places/create',[PlaceController::class, 'create'])->name('place.create');
Route::post('/places/store',[PlaceController::class, 'store'])->name('place.store');
Route::get('/places/{place}/edit', [PlaceController::class, 'edit'])->name('place.edit');
Route::patch('/places/{place}/update', [PlaceController::class, 'update'])->name('place.update');
Route::delete('/places/{place}/destroy', [PlaceController::class, 'destroy'])->name('place.destroy');

#PLACE IMAGES
Route::get('/place_images/{place}/show',[PlaceImageController::class, 'show'])->name('place_image.show');
Route::get('/place_images/{place}/create', [PlaceImageController::class, 'create'])->name('place_image.create');
Route::post('/place_images/{place}/store',[PlaceImageController::class, 'store'])->name('place_image.store');
Route::get('/place_image/{place_image}/edit', [PlaceImageController::class, 'edit'])->name('place_image.edit');
Route::patch('/place_image/{place_image}/update', [PlaceImageController::class, 'update'])->name('place_image.update');
Route::delete('/place_image/{place_image}/destroy', [PlaceImageController::class, 'destroy'])->name('place_image.destroy');

