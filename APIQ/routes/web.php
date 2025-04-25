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

// Para búsqueda POST de certificados (formulario)
Route::post('/validacion', [EstudianteController::class, 'show'])->name('estudiante.show');

// Para obtener PDF (recomendado usar esta URL en el botón "Ver PDF")
Route::get('/validacion/pdf', [EstudianteController::class, 'showPDF'])->name('estudiante.pdf');
