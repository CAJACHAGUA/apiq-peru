<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\EstudianteController;

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

Route::view('/', 'index')->name('home');
Route::view('/validacion', 'validacion')->name('validacion');
Route::post('/validacion', [EstudianteController::class, 'show'])->name('estudiante.show');
Route::view('/a', 'a')->name('a');

 Route::get('/validacion/?id={id}', [EstudianteController::class, 'buscarPorCodigo']);
