<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\WatchFilmController;

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

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/my_movies', [HomeController::class, 'index'])->middleware(['auth'])->name('my_movies');
Route::post('/my_movies', [HomeController::class, 'search']);

// Route::get('/movie_grid_fw', [FilmController::class, 'index'])->name('movie_grid_fw');
Route::get('/', [FilmController::class, 'index'])->name('home');

Route::post('/', [FilmController::class, 'search']);

Route::get('/movie_single/{film}', [MovieController::class, 'index'])->name('movie_single');

Route::get('/watch/{film}', [WatchFilmController::class, 'index'])->name('watch');

Route::post('/store_film', [FilmController::class, 'store'])
                ->middleware('auth')
                ->name('store_film');

Route::get('/404', function () {
    return view('404');
})->name('404');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';