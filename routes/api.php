<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JediController;
use App\Http\Controllers\QuoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {

    Route::group(['prefix' => 'jedi'], function () {
        Route::get('/', [JediController::class, "index"]);
        Route::get('/withQuotes', [JediController::class, "withQuotes"]);
        Route::get('/{jediName}', [JediController::class, "show"]);
        Route::get('/{jediName}/withQuotes', [JediController::class, "showWithQuotes"]);
    });
    
    Route::group(['prefix' => 'quotes'], function () {
        Route::get('/', [QuoteController::class, "index"]);
        Route::get('/random', [QuoteController::class, "random"]);
        Route::get('/{id}', [QuoteController::class, "show"]);
    });

    Route::get('/films[/[{withQuotes}]]', [FilmController::class, "index"]);
    
});
