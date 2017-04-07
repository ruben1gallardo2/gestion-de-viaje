<?php

namespace App\Http\Controllers;

use App\Vuelo as Vuelos;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class VueloController extends Controller
{
  function index() {
    $vuelos = Vuelos::all();
    return view('index', ['vuelos' => $vuelos]);
  }

  function show($id = 1) {
    $vuelo = Vuelos::findOrFail($id);
    return view('vuelo', ['vuelo' => $vuelo]);
  }
}
