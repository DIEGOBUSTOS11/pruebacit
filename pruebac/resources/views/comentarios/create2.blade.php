@extends('layouts.admin')
@section('title',"CREAR COMENTARIOS")
@section ('content')
<br><br><br><br>

<div class="card">
<h4 class="card-header">Crear Nuevo Comentario</h4>
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

  <form   method="POST" action="{{ route('comentario.store2',$video) }}">

    {{  csrf_field() }}

    <div class="form-group">
    <label for="body">Body:</label>
    <input type="text"  class="form-control" name="body" id=body placeholder="escribir body" value="{{ old('body') }}">
    </div>

  
 
   
    <button  type="submit" class="btn btn-primary">Crear Comentario</button>
    <a href="{{ route('comentario.index2',$video) }}" class="btn btn-link">Regresar al listado comentarios</a>

  </form>

</div>
</div>

  
 
@endsection