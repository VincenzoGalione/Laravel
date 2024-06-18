<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
//file di routing



// ROTTA NOMINALE
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');        

//Studenti
Route::get('/chi-siamo',[PublicController::class,'chiSiamo'])->name('chi.siamo');

// rotta parametrica
Route::get('/studenti/dettaglio/{id}', [PublicController::class, 'dettaglio'])->name('student.detail');


// Servizi
Route::get('/servizioDisponibile', [ServiceController::class, 'servizioDisponibile'])->name('servizi');


// Rotta parametrica servizi
Route::get('/servizi/dettaglio/{id}', [ServiceController::class, 'dettaglio'])->name('servizio.detail');
