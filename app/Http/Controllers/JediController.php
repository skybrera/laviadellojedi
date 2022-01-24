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


    public function index(){
        return Jedi::all();
    }


    public function withQuotes(){
        return Jedi::with('quote')->get();
    }


    public function show( string $jediName ){
        return Jedi::where("nome", "=", $jediName)->get();
    }


    public function showWithQuotes( string $jediName ){
        return Jedi::with('quote')->where("nome", $jediName)->get();
    }

    
}
