<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CompetitionController;

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
    return redirect('/competitions/1');
});

Route::get('/competitions/{id}', [CompetitionController::class, 'showGamesFromCompetition'])
    ->where(['id' => '[0-9]+']);

Route::get('/games/add', [CompetitionController::class, 'showForm']);

Route::post('/games/add', [CompetitionController::class, 'storeGame']);
