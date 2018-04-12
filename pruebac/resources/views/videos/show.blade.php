
@extends('layouts.admin')
@section('title',"video {$video->id}")

@section ('content')
<br><br><br><br>
<h1>Usuarios{{ $video->id }}</h1>

  <p>Titulo video {{ $video->titulo }}</p>    
  <p>Contenido {{ $video->contenido}} </p>
  <p>Categoria{{ $video->categoria}} </p>
  <p>Año{{ $video->ano}} </p>
  <p>
  	<a href="{{ route('video.index') }}">Regresar al listado videos</a>
  </p>
@endsection