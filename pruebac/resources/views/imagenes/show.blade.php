
@extends('layouts.admin')
@section('title',"Usuario {$imagen->id}")

@section ('content')
<br><br><br><br>
<h1>Usuarios{{ $imagen->id }}</h1>

  <p>Titulo imagen {{ $imagen->titulo }}</p>    
  <p>Contenido {{ $imagen->contenido}} </p>
  <p>Categoria{{ $imagen->categoria}} </p>
  <p>
  	<a href="{{ route('imagen.index') }}">Regresar al listado Imagenes</a>
  </p>
@endsection