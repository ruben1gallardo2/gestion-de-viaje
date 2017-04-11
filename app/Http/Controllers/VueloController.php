<?php

namespace App\Http\Controllers;

use App\Vuelo as Vuelo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VueloController extends Controller
{

     function index() {
       $vuelos = Vuelo::all();
       return view('index', ['vuelos' => $vuelos]);
     }

  function show($id = 0) {
    try {
    $vuelo = Vuelo::findOrFail($id);
    return view('vuelo', ['vuelo' => $vuelo]);
  }catch(ModelNotFoundException $ex){
    return view('error.exception', ['error.exception' => $ex]);
          }

        }
}
