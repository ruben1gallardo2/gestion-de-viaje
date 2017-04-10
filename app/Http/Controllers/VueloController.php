<?php

namespace App\Http\Controllers;

use App\Vuelo as Vuelo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VueloController extends Controller
{
  function index($id = 1) {
    $vuelo = Vuelo::findOrFail($id);
    return view('vuelo', ['vuelo' => $vuelo]);
  }
  
  function show($id = 1) {
    $vuelo = Vuelo::findOrFail($id);
    return view('vuelo', ['vuelo' => $vuelo]);



    }
}
