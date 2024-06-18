<?php

namespace App\Http\Controllers;

use App\Mail\COntactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() //nome funzione che si richiama in WEB
    {
        return view('welcome'); //! nome del file view nella cartella views
    }

    public function contactUs()
    {
        return view('contattaci');
    }

    public function thankYou()
    {
        return view('thankYou');
    }

    public function submit (Request $request) //! dependency injection
    {
        // dd($request->all()); per vedere tutto 
        $name = $request->input('username');
        $email = $request->input('email');
        $usermessage = $request->input('message');

        //spedire mail all'utente
        Mail::to($email)->send(new COntactMail($name, $email, $usermessage));
        //Mail- classe di partenza 
        //to - inseriamo il destinatario
        // send - spedisci, specifichiamo quale mail spedire

        //! reindirizziamo l'utente per fargli avere un riscontro visivo
        //1. redirect alla home con messaggio
        // return redirect()->route('home')->with('status', 'mail inviata con successo, sarai ricontattato al più presto'); //metodo with- redirect con messaggio

        //2. redirect a una pagina custom - "thank you page"
        return redirect()->route('thankYou.page');
    }
}
