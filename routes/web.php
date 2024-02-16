<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');



Route::get('/pacientes/create', [PacienteController::class, 'index'])->name('createPaciente');
Route::get('/create', [PacienteController::class, 'create'])->name('createPaciente');//table
Route::post('/pacientes/store', [PacienteController::class, 'store'])->name('storePaciente');
Route::get('/pacientes/teste', [PacienteController::class, 'button'])->name('button');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
