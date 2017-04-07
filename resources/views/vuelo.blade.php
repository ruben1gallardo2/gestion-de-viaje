@extends('layouts.app')

@section('title', 'especifico')

@section('content')
<h1>Usuario {{$vuelo->name}}  N°{{$vuelo->id}} </h1>
<h2>Destino: {{ $vuelo->cities }}</h2>
<h3>boletos disponibles</h3> <h2>{{$vuelo->sits}}</h2>
<h5>salida {{$vuelo->created_at}}</h5>
@endsection
