<?php

namespace App\Http\Controllers;

class JediController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }


    public function index(){
        return 'Tutti i Jedi';
    }



    public function show( $jediName ){
        return "Hai selezionalo Il Jedi: " . $jediName;
    }


    public function random(){
        $result = [
            "nome" => "Dart Vadher",
            "citazione" => "Io sono tuo padre",
            "film" => "L'impero colpisce ancora"
        ];

        return response()->json($result);
    }
    
}
