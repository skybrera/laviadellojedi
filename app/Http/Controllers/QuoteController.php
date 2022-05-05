<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
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


    public function index(): JsonResponse{
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

        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $quotes
        ], 200);
    }



    public function show( $id ): JsonResponse{
        $resultFromQuery = Quote::find($id);
        $result = [
            "nome"  => $resultFromQuery->jedi->nome,
            "film"  => $resultFromQuery->film->titolo,
            "anno"  => $resultFromQuery->film->anno,
            "quote" => $resultFromQuery->quote,
        ];

        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $result
        ], 200);
    }


    public function random(): JsonResponse{
        $numberOfQuotes = Quote::count();
        $randomNumber = rand(1, $numberOfQuotes);
        
        $resultFromQuery = Quote::find($randomNumber);

        $result = [
            "nome"  => $resultFromQuery->jedi->nome,
            "film"  => $resultFromQuery->film->titolo,
            "anno"  => $resultFromQuery->film->anno,
            "quote" => $resultFromQuery->quote,
        ];

        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $result
        ], 200);
    }
    
}
