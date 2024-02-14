<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PacienteController;

Route::get('/', [PacienteController::class, 'index']);
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('table');
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacienteCadastro');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
