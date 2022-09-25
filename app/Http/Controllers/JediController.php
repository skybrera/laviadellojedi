<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Jedi;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class JediController extends BaseController
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
     *     description="Show all Jedi. 
     *          Passing withQuotes as query string param return oll jedi with his quotes",
     *     operationId="/api/v1/jedi(GET)",
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
        $query = Jedi::class;
        $query = ($withQuotes) ? $query::with('quotes')->get() : $query::all();

        return $this->sedResponse(true, "", $query);
        // var_dump([
        //     $request->query("withQuotes"),
        //     is_bool($withQuotes)
        // ]);
    }


    /**
     * @OA\Get(
     *     path="/api/v1/jedi/{name}",
     *     tags={"Jedi"},
     *     summary="Show a specific Jedi",
     *     description="Show a specific Jedi. 
     *          Passing withQuotes as query string param return oll jedi with his quotes",
     *     operationId="/api/v1/jedi/{name}(GET)",
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
    public function show(Request $request, string $jediName): JsonResponse{
        $withQuotes = filter_var($request->query("withQuotes"), FILTER_VALIDATE_BOOLEAN); // true
        $query = Jedi::where("nome", "=", $jediName); 
        $query = ($withQuotes) ? $query->with('quotes')->get() : $query->get();

        return $this->sedResponse(true, "", $query);
    }

    
}
