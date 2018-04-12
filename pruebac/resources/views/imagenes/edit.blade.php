@extends('layouts.admin')
@section('title',"Editar Imagenes")
@section ('content')
<br><br><br><br>
<h1>EDITAR IMAGENES</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
      <h6>Por favor corrige los errores debajo:</h6>
       <ul>
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
       </ul>

    </div>
    @endif 

  <form   method="POST" action="{{ url("imagenes/{$imagen->id}") }}">
    {{ method_field('PUT') }}
  	{{  csrf_field() }}

    <label for="titulo">Titulo:</label>
  	<input type="text" name="titulo" id=tutilo placeholder="escribir titulo" value="{{ old('titulo',$imagen->titulo) }}">
   
    <br>
  	<label for="contenido">Contenido:</label>
  	<input type="text" name="contenido" id=contenido placeholder="ejemplo"  value="{{ old('contenido',$imagen->contenido) }}">
    <br>
    <label for="categoria">Categoria:</label>
  	<input type="text" name="categoria" id=categoria  placeholder="nose">
    <br>
    <button  type="submit">Actualizar  Imagen</button>


  </form>
  <p>
  	<a href="{{ route('imagen.index') }}">Regresar al listado de Imagenes</a>
  </p>
@endsection