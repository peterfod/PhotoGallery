<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//kezdőoldal
//Route::get('/', 'App\Http\Controllers\GalleryController@index');
Route::get('/', [GalleryController::class, 'index']);

//gallery
//Route::resource('gallery', 'App\Http\Controllers\GalleryController');
Route::resource('gallery', GalleryController::class);
//Route::get('/gallery/show/{id}', 'App\Http\Controllers\GalleryController@show');
Route::get('/gallery/show/{id}', [GalleryController::class, 'show']);

//photo
Route::resource('photo', 'App\Http\Controllers\PhotoController');
Route::get('/photo/details/{id}', 'App\Http\Controllers\PhotoController@details');
Route::get('/photo/create/{id}', 'App\Http\Controllers\PhotoController@create');
