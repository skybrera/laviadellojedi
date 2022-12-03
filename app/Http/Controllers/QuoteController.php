<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use App\Models\Quote;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;


class QuoteController extends BaseController
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
     *     path="/quotes",
     *     tags={"Quotes"},
     *     summary="Show all quotes",
     *     description="Show all quotes. 
     *          Passing withRelations as query string param return oll quotes with jedi and films",
     *     operationId="/api/v1/quotes(GET)",
     *     @OA\Parameter(
     *          in="query",
     *          name="withRelations",
     *          required=false,
     *          description="Passing withRelations as query string param return oll quotes with jedi and films",
     *          example="true",
     *          @OA\Schema(type="boolean")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     * )
     */
    public function index(Request $request): JsonResponse{
        $withRelations = filter_var($request->query("withRelations"), FILTER_VALIDATE_BOOLEAN); // true
        $quotes = ($withRelations) ? Quote::with('jedi')->with('film')->get() : Quote::all();

        return $this->sedResponse(true, "", $quotes);
    }

    /**
     * @OA\Get(
     *     path="/quotes/{id}",
     *     tags={"Quotes"},
     *     summary="Show all quotes",
     *     description="Show a specific quotes. 
     *          Passing withRelations as query string param return oll quotes with jedi and films",
     *     operationId="/api/v1/quotes/{id}(GET)",
     *     @OA\Parameter(
     *          in="query",
     *          name="withRelations",
     *          required=false,
     *          description="Passing withRelations as query string param return oll quotes with jedi and films",
     *          example="true",
     *          @OA\Schema(type="boolean")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     * )
     */
    public function show(Request $request, int $id): JsonResponse{
        $withRelations = filter_var($request->query("withRelations"), FILTER_VALIDATE_BOOLEAN); // true
        $quote = ($withRelations) ? Quote::with('jedi')->with('film')->find($id) : Quote::find($id);

        return $this->sedResponse(true, "", $quote);
    }

    /**
     * @OA\Get(
     *     path="/quotes/random",
     *     tags={"Quotes"},
     *     summary="Show all quotes",
     *     description="Show a random quotes. 
     *          Passing withRelations as query string param return oll quotes with jedi and films",
     *     operationId="/api/v1/quotes/random(GET)",
     *     @OA\Parameter(
     *          in="query",
     *          name="withRelations",
     *          required=false,
     *          description="Passing withRelations as query string param return oll quotes with jedi and films",
     *          example="true",
     *          @OA\Schema(type="boolean")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     * )
     */
    public function random(Request $request): JsonResponse{
        $randomNumber = rand(1, Quote::count());

        return $this->show($request, $randomNumber);
    }
    
}
