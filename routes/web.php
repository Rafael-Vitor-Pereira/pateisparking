<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\HistoryController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::resource('clients', ClientController::class)->except(['show']);
Route::resource('vagas', VacancyController::class)->except(['show', 'destroy']);
Route::resource('historico', HistoryController::class)->only(['index']);