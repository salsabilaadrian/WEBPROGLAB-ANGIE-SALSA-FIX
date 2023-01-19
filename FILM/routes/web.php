<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;

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

Route::group(['middleware' => 'web'], function() {
    Route::group(['middleware' => ['guest']], function() {
        // login
        Route::get('/login', [UserController::class, 'login_page'])->name('login_page')->middleware('guest');
        Route::post('/login_act', [UserController::class, 'login'])->name('login');
        // register
        Route::get('/register', [UserController::class, 'register_page'])->name('register_page');
        Route::post('/register/add', [UserController::class, 'register'])->name('register');
    });

    Route::group(['middleware' => 'auth'], function() {
        //logout
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
    
    //movie
    Route::get('/', [FilmController::class, 'index'])->name('home');
    Route::get('/movie', [FilmController::class, 'index']);
    Route::get('/movie/{movie_id}', [FilmController::class, 'show'])->name('movie_detail');
});
