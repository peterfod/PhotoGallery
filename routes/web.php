<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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

//kezdőoldal
//Route::get('/', 'App\Http\Controllers\GalleryController@index');
Route::get('/', [GalleryController::class, 'index']);
Route::get('/home', [GalleryController::class, 'index']);

//Route::get('/logout', 'App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

//gallery
//Route::resource('gallery', 'App\Http\Controllers\GalleryController');
Route::resource('gallery', GalleryController::class);
//Route::get('/gallery/show/{id}', 'App\Http\Controllers\GalleryController@show');
Route::get('/gallery/show/{id}', [GalleryController::class, 'show']);

//photo
Route::resource('photo', 'App\Http\Controllers\PhotoController');
Route::get('/photo/details/{id}', 'App\Http\Controllers\PhotoController@details');
Route::get('/photo/create/{id}', 'App\Http\Controllers\PhotoController@create');



/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
