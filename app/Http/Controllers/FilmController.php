<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use App\Models\Film;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class FilmController extends BaseController
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
     *     @OA\Parameter(
     *          in="query",
     *          name="withQuotes",
     *          required=false,
     *          description="Passing withQuotes as query string param return oll jedi with his quotes",
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
        $withQuotes = filter_var($request->query("withQuotes"), FILTER_VALIDATE_BOOLEAN);
        $films = ($withQuotes) ? Film::with('quotes')->get() : Film::all();
        
        return $this->sedResponse(true, "", $films);
    }

    /**
     * @OA\Get(
     *     path="/api/v1/films/{id}",
     *     tags={"Films"},
     *     summary="Show All Star Wars Films",
     *     description="Show All Star Wars Films",
     *     operationId="/api/v1/films/{id}(GET)",
     *     @OA\Parameter(
     *          in="query",
     *          name="withQuotes",
     *          required=false,
     *          description="Passing withQuotes as query string param return oll jedi with his quotes",
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
        $withQuotes = filter_var($request->query("withQuotes"), FILTER_VALIDATE_BOOLEAN);
        $film = ($withQuotes) ? Film::with('quotes')->find($id) : Film::find($id);

        return $this->sedResponse(true, "", $film);
    }


    

}
