<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PublicController extends Controller
{
   public $arrayStudents = [
        ['id'=> 1, 'name'=>'Leonardo', 'surname'=>'Di Napoli'],
        ['id'=> 2, 'name'=>'Andrea', 'surname'=>'Asaro'],
        ['id'=> 3, 'name'=>'Michele', 'surname'=>'Sette'],
        ['id'=> 4, 'name'=>'Emanuele', 'surname'=>'Pelliccia'],
        ['id'=> 5, 'name'=>'Vincenzo', 'surname'=>'Galione'],
    ];

   public function homepage() {
        $title = 'Ciao a tutti';
        return view('welcome', ['titolo'=>$title]); //passaggio di dati alla vista
        //chiave dell'array - NOME DELLA VARIABILE SULLA VISTA
        //valore - il dato in sè
    }

    public function chiSiamo() {
        return view('chiSiamo', ['students'=> $this->arrayStudents]);
    }  

    public function dettaglio($id){
        foreach ($this->arrayStudents as $student) {
           if($id == $student['id']){
               return view('student.detail', ['student' => $student]);
           }
        }
    }
}
