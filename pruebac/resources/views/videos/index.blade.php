

@extends ('layouts.admin')

@section('title', 'videos')

@section('content')
<br><br><br><br>

<div class="d-flex justify-content-between align-items-end mb-3">
<h1 class="pb-1">{{ $title }}</h1>


<p>
  <a href="{{ route('video.create') }}" class="btn btn-primary"> Crear video</a>
</p>


</div>

@if($videos->isNotEmpty())
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Contenido</th>
      <th scope="col">Categoria</th>
      <th scope="col">Año</th>
    </tr>
  </thead>
  <tbody>
  @foreach($videos as $video)

    <tr>
      <th scope="row">{{ $video->id }}</th>
      <td>{{$video->titulo}}</td>
      <td>{{$video->contenido }}</td>
      <td>{{$video->categoria}}</td>
      <td>{{$video->ano}}</td>
      <td>
      
        <form  action="{{ route('video.destroy',$video) }}"  method="POST"> 
        {{  csrf_field() }}
        {{ method_field('DElETE') }}
        <a href="{{ route('video.show',$video) }}" class="btn btn-link"><span class="oi oi-eye"></span></a> 
        <a href="{{route('video.edit', $video) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
        <a href="{{ route('comentario.index2',$video)}}" class="btn btn-danger"> Ver Comentarios</a>
        <button type="submit" class="btn btn-link"><span class="oi oi-delete"></span></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else 
<p>No hay videos  registradas</p>
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