<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>gestion @yield('listado de vuelos')</title>
  </head>
  <body>

<h1>Usuario {{$vuelo->name}}  N°{{$vuelo->id}} </h1>

  @section('sidebar')
                <h2>{{ $vuelo->cities }} to {{ $vuelo->cities }}</h2>
          @show

        <h3>boletos disponibles</h3> <h2>{{$vuelo->sits}}</h2>

        <h5>salida {{$vuelo->timestamp}}</h5>

  </body>
</html>
