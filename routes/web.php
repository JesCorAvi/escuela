<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\NotaController;
use Illuminate\Support\Facades\Route;
use App\Models\Nota;
use App\Models\Asignatura;
use App\Models\Alumno;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('alumnos', AlumnoController::class)->middleware("auth");

Route::resource('asignaturas', AsignaturaController::class)->middleware("auth");

Route::resource('notas', NotaController::class)->middleware("auth");

Route::get("finales", function(){
    return view("finales.index", ["notas"=>Nota::all(), "asignaturas"=> Asignatura::all(), "alumnos" => Alumno::all()]);

});


require __DIR__.'/auth.php';
