<?php

use App\Livewire\Admin\Clientes\Client;
use App\Livewire\Admin\Clientes\FormClient;

use App\Livewire\Admin\History\History;

use App\Livewire\Admin\Home\Home;

use App\Livewire\Admin\Vacancy\FormVacancy;
use App\Livewire\Admin\Vacancy\FormVacancyEdit;
use App\Livewire\Admin\Vacancy\Vacancy;

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

Route::get('/', Home::class)->name('home');

Route::get('/clients', Client::class);
Route::get('/clients/create', FormClient::class);
Route::get('/clients/{cliente}/editar', FormClient::class);

Route::get('/vagas', Vacancy::class);
Route::get('/vagas/create', FormVacancy::class);
Route::get('/vagas/{vaga}/editar', FormVacancyEdit::class);

Route::get('/historico', History::class);
