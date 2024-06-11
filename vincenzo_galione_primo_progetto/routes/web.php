<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Ciao a tutti';
    return view('welcome', ['titolo'=>$title]); //passaggio di dati alla vista
    //chiave dell'array - NOME DELLA VARIABILE SULLA VISTA
    //valore - il dato in sè
});

Route::get('/chi-siamo', function () {
    $arrayStudents = [
        ['name'=>'Leonardo', 'surname'=>'Di Napoli'],
        ['name'=>'Andrea', 'surname'=>'Asaro'],
        ['name'=>'Michele', 'surname'=>'Sette'],
        ['name'=>'Emanuele', 'surname'=>'Pelliccia'],
    ];
    return view('chiSiamo', ['students'=>$arrayStudents]);
});

