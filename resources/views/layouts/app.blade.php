<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vuelos - @yield('title')</title>
  </head>
  <body>
    @if(Route::currentRouteAction() == 'App\Http\Controllers\VueloController@show')
    <a href="{{action('VueloController@index')}}">atras</a>
    @endif
    @yield('content')
  </body>
</html>
