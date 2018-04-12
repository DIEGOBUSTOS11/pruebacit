

@extends ('layouts.admin')

@section('title', 'Imagenes')

@section('content')
<br><br><br><br>

<div class="d-flex justify-content-between align-items-end mb-3">
<h1 class="pb-1">{{ $title }}</h1>



<p>
  <a href="{{ route('imagen.create') }}" class="btn btn-primary"> Crear Imagen</a>
</p>


</div>

@if($imagenes->isNotEmpty())
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Contenido</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>
  @foreach($imagenes as $imagen)

    <tr>
      <th scope="row">{{ $imagen->id }}</th>
      <td>{{$imagen->titulo}}</td>
      <td>{{$imagen->contenido }}</td>
      <td>{{$imagen->categoria}}</td>
      <td>
      
        <form  action="{{ route('imagen.destroy',$imagen) }}"  method="POST"> 
        {{  csrf_field() }}
        {{ method_field('DElETE') }}
        <a href="{{ route('imagen.show',$imagen) }}" class="btn btn-link"><span class="oi oi-eye"></span></a> 
        <a href="{{route('imagen.edit', $imagen) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
         <a href="{{ route('comentario.index',$imagen)}}" class="btn btn-danger"> Ver Comentarios</a> 
        <button type="submit" class="btn btn-link"><span class="oi oi-delete"></span></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else 
<p>No hay imagenes  registradas</p>
@endif  
  @endsection


{{-- <ul>
   @forelse ($users as $user)

            <li>
            	{{ $user->name}},({{ $user->email}})
            
            </li>
            @empty 

            <li>NO HAY USUARIOS  REGISTRADOS</li>

            @endforelse

    </ul> --}}