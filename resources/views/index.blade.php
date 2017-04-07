@extends('layouts.app')

@section('title', 'gestion')

@section('content')
  <ul>
    @foreach ($vuelos as $vuelo)
      <li>
        <a href="{{action('VueloController@show', ['id' => $vuelo->id])}}">
          Vuelo de: {{$vuelo->name}} a {{$vuelo->cities}}
        </a>
      </li>
    @endforeach
  </ul>
@endsection
