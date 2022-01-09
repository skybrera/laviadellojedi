<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
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
        $resultFromQuery = Quote::with('jedi')->with('film')->get();
        $quotes = [];

        foreach( $resultFromQuery as $key => $value ){
            $quote = [
                "nome"  => $value->jedi->nome,
                "film"  => $value->film->titolo,
                "anno"  => $value->film->anno,
                "quote" => $value->quote,
            ];
            $quotes[] = $quote;
        }

        return response()->json($quotes);
    }



    public function show( $id ){
        $resultFromQuery = Quote::find($id);
        $result = [
            "nome"  => $resultFromQuery->jedi->nome,
            "film"  => $resultFromQuery->film->titolo,
            "anno"  => $resultFromQuery->film->anno,
            "quote" => $resultFromQuery->quote,
        ];

        return response()->json($result);
    }


    public function random(){
        $numberOfQuotes = Quote::count();
        $randomNumber = rand(1, $numberOfQuotes);
        
        $resultFromQuery = Quote::find($randomNumber);

        $result = [
            "nome"  => $resultFromQuery->jedi->nome,
            "film"  => $resultFromQuery->film->titolo,
            "anno"  => $resultFromQuery->film->anno,
            "quote" => $resultFromQuery->quote,
        ];

        return response()->json($result);
    }
    
}
