

@extends ('layouts.admin')

@section('title', 'Comentario')

@section('content')
<br><br><br><br>
<div class="d-flex justify-content-between align-items-end mb-3">
<h1 class="pb-1">{{ $title }}</h1>

  <a href="{{ route('comentario.create',$imagen) }}" class="btn btn-primary"> Crear Comentario</a>

</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
       <th scope="col">Id</th>
      <th scope="col">Comentario</th>

    </tr>
  </thead>
  <tbody>
  @foreach($imagen->comments as $comentario)

    <tr>
      <th scope="row">{{ $comentario->id }}</th>
      <td>{{$comentario->body}}</td>
      <td>
      
        <form  action="{{ route('comentario.destroy',['comentario'=>$comentario,'imagen'=>$imagen]) }}"  method="POST"> 
        {{  csrf_field() }}
        {{ method_field('DElETE') }}
        <button type="submit" class="btn btn-link"><span class="oi oi-delete"></span></button>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
  <a href="{{ route('imagen.index') }}" class="btn btn-link">Regresar al listado Imagenes</a>
 
  @endsection


