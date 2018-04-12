@extends('layouts.admin')
@section('title',"CREAR VIDEOS")
@section ('content')
<br><br><br><br>

<div class="card">
<h4 class="card-header">Crear Nuevo Video </h4>
<div class="card-footer">
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

  <form   method="POST" action="{{ url('videos') }}">

    {{  csrf_field() }}

    <div class="form-group">
    <label for="titulo">Titulo:</label>
    <input type="text"  class="form-control" name="titulo" id=titulo placeholder="escribir itulo" value="{{ old('titulo') }}">
    </div>

   <div class="form-group">
    <label for="contenido">Contenido:</label>
    <input type="text"  class="form-control" name="contenido" id=contenido placeholder="hola"  value="{{ old('contenido') }}">

   </div>

   <div class="form-group">
    <label for="categoria">Categoria:</label>
    <input type="text"  class="form-control" name="categoria" id=categoria  placeholder="nose">
   </div>

   
  
   {{--  @if($errors->has('name'))
    <p>{{ $errors->first('name') }}</p>
    @endif --}}
   
    <button  type="submit" class="btn btn-primary">Crear Video</button>
    <a href="{{ route('video.index') }}" class="btn btn-link">Regresar al listado Videos</a>

  </form>

</div>
</div>


   
  
  
 
@endsection