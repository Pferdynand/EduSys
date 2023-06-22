<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Estudiantes;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/estudiantes', [App\Http\Controllers\EstudiantesController::class, 'index'])->name('estudiantes');
Route::get('/mensualidades', [App\Http\Controllers\MensualidadesController::class, 'index'])->name('mensualidades');
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');