<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\KeywordController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\PlaceImageController;
use App\Http\Controllers\Admin\PlaceKeywordController;
use App\Http\Controllers\Admin\TopController as AdminTopController;
use App\Http\Controllers\TopController;

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
        # Users
        Route::get('/users', [UsersController::class, 'index'])->name('users');
        Route::patch('/users/{user}/update', [UsersController::class, 'update'])->name('users.update');
        Route::get('/keywords', [KeywordController::class, 'index'])->name('keywords');
        Route::get('/keywords/create', [KeywordController::class, 'create'])->name('keywords.create');
        Route::post('/keywords/store', [KeywordController::class, 'store'])->name('keywords.store');
        Route::get('/keywords/edit/{id}', [KeywordController::class, 'edit'])->name('keywords.edit');
        Route::patch('/keywords/{id}/update', [KeywordController::class,'update'])->name('keywords.update');
        Route::delete('/keywords/{id}/destroy', [KeywordController::class, 'destroy'])->name('keywords.destroy');
        #PLACE
        Route::get('/places',[PlaceController::class, 'index'])->name('place.index');
        Route::get('/places/create',[PlaceController::class, 'create'])->name('place.create');
        Route::post('/places/store',[PlaceController::class, 'store'])->name('place.store');
        Route::get('/places/{place}/edit', [PlaceController::class, 'edit'])->name('place.edit');
        Route::patch('/places/{place}/update', [PlaceController::class, 'update'])->name('place.update');
        Route::delete('/places/{place}/destroy', [PlaceController::class, 'destroy'])->name('place.destroy');
        Route::post('/places/getPrefecturesByArea', [PlaceController::class, 'getPrefecturesByArea'])->name('ajax.getPrefecturesByArea');
        Route::post('/places/getCitiesByPrefecture', [PlaceController::class, 'getCitiesByPrefecture'])->name('ajax.getCitiesByPrefecture');
        #PLACE IMAGES
        Route::get('/place_images/{place}/show',[PlaceImageController::class, 'show'])->name('place_image.show');
        Route::get('/place_images/{place}/create', [PlaceImageController::class, 'create'])->name('place_image.create');
        Route::post('/place_images/{place}/store',[PlaceImageController::class, 'store'])->name('place_image.store');
        Route::get('/place_image/{place_image}/edit', [PlaceImageController::class, 'edit'])->name('place_image.edit');
        Route::patch('/place_image/{place_image}/update', [PlaceImageController::class, 'update'])->name('place_image.update');
        Route::delete('/place_image/{place_image}/destroy', [PlaceImageController::class, 'destroy'])->name('place_image.destroy');
        #Place Keyword
        Route::get('/place_keywords/{place}/index',[PlaceKeywordController::class, 'index'])->name('place_keyword.index');
        Route::post('/place_keywords/{place}/store',[PlaceKeywordController::class, 'store'])->name('place_keyword.store');
        Route::patch('/place_keyword/{place}/{keyword}/update', [PlaceKeywordController::class, 'update'])->name('place_keyword.update');
        Route::delete('/place_keyword/{place}/{keyword}/destroy', [PlaceKeywordController::class, 'destroy'])->name('place_keyword.destroy');
    });

    // for displaying ADMIN/ GENRE MANAGEMENT
    Route::get('/genres', [GenreController::class, 'index'])->name('genres');
    Route::post('/genres/store', [GenreController::class, 'store'])->name('genres.store');
    Route::patch('/genres/{genre}/update', [GenreController::class, 'update'])->name('genres.update');
    Route::delete('/genres/{genre}/destroy', [GenreController::class, 'destroy'])->name('genres.destroy');
});

