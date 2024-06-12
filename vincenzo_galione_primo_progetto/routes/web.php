<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;
//file di routing



// ROTTA NOMINALE
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');        //concatenamento metodo etichetta dove all'interno si inserisce una stringa, non serve che corrisponda al nome della vista, è solo un etichetta che serve per richiamarla
// metodo name()per dare il nome ad una rotta

//Studenti
Route::get('/about-us',[PublicController::class,'chiSiamo'])->name('chi.siamo');
Route::get('/studenti/dettaglio/{id}', [PublicController::class, 'dettaglio'])->name('student.detail');

// Docenti
Route::get('/docenti', [TeachersController::class, 'docenti'])->name('teachers');
// pagina di dettaglio dei docenti


//! ROTTA PARAMETRICA - rotta che accetta un parametro
Route::get('/docenti/dettaglio/{name}', [TeachersController::class, 'dettaglio'])->name('teacher.detail');