<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

/**
 * 
 * @OA\Info(
 *   title="La via del Jedi API",
 *   version="1.0.1",
 *   @OA\Contact(
 *     email="info@stefanosponsillo.net"
 *   )
 * ),
 * 
 * @OA\Server(
 *     url="/api/v1",
 *     description="Production server",
 * ),
 *
 * @OA\Parameter(
 *    in="header",
 *    name="Authorization",
 *    required=true,
 *    description="passing token from headers",
 *    example="Bearer 546wd3dsdas.sadzcxvnsd3e35rr3a.123lkfkr34z",
 *    @OA\Schema(
 *       type="string"
 *    )
 * ),
 * 
 */
class BaseController extends Controller
{

    public function sedResponse(
        bool $success = true, 
        string $message = "", 
        $data, 
        $http_status = Response::HTTP_OK): JsonResponse{
        return response()->json([
            "success" => $success,
            "message" => $message,
            "data" => $data
        ], $http_status);
    }
}
