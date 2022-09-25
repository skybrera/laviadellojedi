<?php

namespace App\Http\Controllers;

use App\Models\Jedi;

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


    /**
     * @OA\Get(
     *     path="/api/v1/jedi",
     *     tags={"Jedi"},
     *     summary="Show all Jedi",
     *     description="Show all Jedi",
     *     operationId="/api/v1/jedi(GET)",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     * )
     */
    public function index(){
        return Jedi::all();
    }


    public function withQuotes(){
        return Jedi::with('quote')->get();
    }


    /**
     * @OA\Get(
     *     path="/api/v1/jedi/{name}",
     *     tags={"Jedi"},
     *     summary="Show a specific Jedi",
     *     description="Show a specific Jedi",
     *     path="/api/v1/jedi/{name}(GET)",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     * )
     */
    public function show( string $jediName ){
        return Jedi::where("nome", "=", $jediName)->get();
    }


    public function showWithQuotes( string $jediName ){
        return Jedi::with('quote')->where("nome", $jediName)->get();
    }

    
}
