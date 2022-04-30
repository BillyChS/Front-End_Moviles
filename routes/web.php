<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CicloController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\GrupoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UsersController::class, 'index']);


Route::prefix('carrera')->group(function () {
    Route::get('', [CarreraController::class, 'index'])->name('carrera.index');
    Route::get('{Codigo_Carrera}/edit', [CarreraController::class, 'edit'])->name('carrera.edit');
    Route::get('{Carrera}/show', [CarreraController::class, 'show'])->name('carrera.show');
    Route::post('', [CarreraController::class, 'store'])->name('carrera.store');
    Route::delete('{Codigo_Carrera}', [CarreraController::class, 'destroy'])->name('carrera.delete');
});

//Carreras


//Route::post('', [CarreraController::class, 'store'])->name('carrera.create');

//Cursos
Route::prefix('cursos')->group(function () {
    Route::get('', [CursosController::class, 'index'])->name('cursos.index');
    Route::post('', [CursosController::class, 'store'])->name('cursos.create');
    Route::post('/mostrarCursos', [CursosController::class, 'showCursos'])->name('cursos.show');
    Route::delete('{Codigo_Curso}', [CursosController::class, 'destroy'])->name('cursos.delete');
    Route::post('', [CursosController::class, 'edit'])->name('cursos.edit');

    Route::get('{Codigo_Curso}/editarCurso', [CursosController::class, 'showCurso'])->name('mostrarCurso.show');
});




//Elima un curso por URL desde el edit de carrera


//Profesores
Route::get('/profesor', [ProfesorController::class, 'index'])->name('profesor.index');

//Alumnos
Route::prefix('alumno')->group(function () {
    Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumno.index');
    Route::post('/mostrarAlumnos', [AlumnoController::class, 'showCursos'])->name('alumno.show');
    Route::get('/historial', [AlumnoController::class, 'mostrarHistorial'])->name('alumno.historial');
});



//Ciclos
Route::get('/ciclos', [CicloController::class, 'index'])->name('ciclo.index');

//Matriculas
Route::get('/matriculas', [MatriculaController::class, 'index'])->name('matricula.index');


//Oferta Academica
Route::prefix('oferta')->group(function () {
    Route::get('/ofAcademica', [OfertaController::class, 'index'])->name('oferta.index');
    Route::post('/ofAcademica', [OfertaController::class, 'show'])->name('oferta.show');
});

Route::get('{/grupos', [GrupoController::class, 'index'])->name('grupo.index');
Route::get('{Codigo_Curso}/ediGrupo', [GrupoController::class, 'showGrupos'])->name('showGrupo.edit');
Route::get('{Numero_Grupo}/ediGrupo', [GrupoController::class, 'edit'])->name('grupo.edit');
Route::post('/grupoCreate', [GrupoController::class, 'store'])->name('grupo.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
