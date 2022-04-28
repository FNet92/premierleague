<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TeamController;

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
    return redirect('teams');
});


Route::controller(TeamController::class)->group(function () {
    Route::get('/teams', 'index')->name('teams');
});


Route::controller(\App\Http\Controllers\GameController::class)->group(function () {
    Route::get('/games', 'index')->name('games');
    Route::post('/games/generate', 'generate')->name('games.generate');
    Route::post('/games/generate_results', 'generateResults')->name('games.generate_results');
});

