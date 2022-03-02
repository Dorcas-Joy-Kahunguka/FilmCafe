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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/movie_grid_fw', function () {
//     return view('movie_grid_fw');
// })->name('movie_grid_fw');

Route::get('/movie_grid_fw', [FilmController::class, 'index'])->name('movie_grid_fw');

Route::post('/movie_grid_fw', [FilmController::class, 'search']);

Route::get('/movie_single/{film}', [MovieController::class, 'index'])->name('movie_single');

Route::get('/watch/{film}', [WatchFilmController::class, 'index'])->name('watch');

Route::get('/404', function () {
    return view('404');
})->name('404');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/store_film', [FilmController::class, 'store'])
                ->middleware('auth')
                ->name('store_film');

require __DIR__.'/auth.php';