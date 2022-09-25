<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }


    /**
     * @OA\Get(
     *     path="/api/v1/films",
     *     tags={"Films"},
     *     summary="Show All Star Wars Films",
     *     description="Show All Star Wars Films",
     *     operationId="/api/v1/films(GET)",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     * )
     */
    public function index($withQuotes = false): JsonResponse{
        $films = (!$withQuotes) ? Film::all() : Film::with('quotes')->get();

        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $films
        ], 200);
    }


    public function show( $id ): JsonResponse{
        $film = Film::find($id);

        return response()->json([
            "success" => true,
            "message" => "",
            "data" => $film
        ], 200);
    }


    

}
