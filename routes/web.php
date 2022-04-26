<?php

namespace App\Http\Controllers;
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

Route::get('/', [CasalController::class, 'inicio'])->name('/');
Route::get('/editar{casal?}', [CasalController::class, 'editar'])->name('editar');
Route::delete('/eliminar{casal}', [CasalController::class, 'eliminar'])->name('eliminar');
Route::get('/añadir', [CasalController::class, 'añadir'])->name('añadir');
