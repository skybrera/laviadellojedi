<?php

/** @var \Laravel\Lumen\Routing\Router $router */


use App\Http\Controllers\JediController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     // return $router->app->version();
//     return view('home');
// });
$router->get('/', 'HomeController@index');



$router->group(['prefix' => 'api/v1'], function () use ($router) {

    // $router->group(['prefix' => 'jedi'], function () use ($router) {
    //     $router->get('/', 'JediController@index');
    //     $router->get('/{jediName}', 'JediController@show');
    // });

    $router->get('/jedi', 'JediController@index');
    $router->get('/jedi/withQuotes', 'JediController@withQuotes');
    $router->get('/jedi/{jediName}', 'JediController@show');
    $router->get('/jedi/{jediName}/withQuotes', 'JediController@showWithQuotes');
    
    
    
    $router->group(['prefix' => 'quotes'], function () use ($router) {
        $router->get('/', 'QuoteController@index');
        $router->get('/random', 'QuoteController@random');
        $router->get('/{id}', 'QuoteController@show');
    });
    
});
