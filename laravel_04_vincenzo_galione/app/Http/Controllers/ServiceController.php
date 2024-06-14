<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{   public  $arrayServices = [
            ['id'=> 1,'name' => "Consulenza Tech",'responsible' => 'Vincenzo Galione', 'sector'=>'Web Development'],
            ['id'=> 2,'name' => ' Consulenza Grafica','responsible' => 'Alberto Ugo', 'sector'=>'Grafic design'],
            ['id'=> 3,'name' => ' Consulenza  Video','responsible' => 'Anna Miro', 'sector'=>'Video maker'],
            ['id'=> 4,'name' => ' Consulenza  Video Pro','responsible' => 'Alfonso Di Maria', 'sector'=>'Video maker advanced'],
            ['id'=> 4,'name' => ' Corso IA programming','responsible' => 'Matteo Orlando', 'sector'=>'web programming'],
        ];

    public function servizioDisponibile(){
      return view('servizioDisponibile', ['servizi' =>$this->arrayServices]);
    }

    public function dettaglio($id){
        foreach ($this->arrayServices as $service) {
            if($id == $service['id']){
                return view('servizio.detail',['service' =>$service]);
            }
        }
    }
}
