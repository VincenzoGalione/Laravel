<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PublicController extends Controller
{
   public $arrayStudents = [
        ['id'=> 1, 'name'=>'Luca', 'surname'=>'Di Capri','età'=>'30 anni'],
        ['id'=> 2, 'name'=>'Alberto', 'surname'=>'Leccesi','età'=>'21 anni'],
        ['id'=> 3, 'name'=>'Francesca', 'surname'=>'Di Livio','età'=>'35 anni'],
        ['id'=> 4, 'name'=>'Michela', 'surname'=>'Tavano','età'=>'40 anni'],
        ['id'=> 5, 'name'=>'Vincenzo', 'surname'=>'Galione','età'=>'25 anni'],
    ];

   public function homepage() {
        $title = 'Ciao a tutti';
        return view('welcome', ['titolo'=>$title]); 
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
