<?php

namespace App\Http\Controllers;
use\App\Comentarios;
use Illuminate\Http\Request;
use App\Imagen;
use App\Videos;

class ComentariosController extends Controller
{
    // IMAGENES 

    public function  index(Imagen $imagen){
    $title = 'Listado de comentrios';
    
    return view('comentarios.index',compact('title','imagen')); // array asociativo

    }

    public function create(Imagen $imagen){

    return view('comentarios.create',compact('imagen'));
   }


   public  function store(Imagen $imagen){

   // return  redirect ('usuarios/nuevo')
   // ->withInput();

    $data = request()->validate([
     'body'=> 'required',
     
   ],[
    'body.required' => 'El campo nombre es obligatorio'
   ]);
   //dd($data);
    

    $comment = new Comentarios(['body' => $data['body']]);

    $imagen->comments()->save($comment);

    return redirect()->route('comentario.index',$imagen);
   }

   

public  function  destroy(Comentarios $comentario,Imagen $imagen){
  $comentario->delete();
return  redirect()->route('comentario.index',$imagen);


}




//VIDEOS
public function  index2(Videos $video){
    $title = 'Listado de comentrios';
    
    return view('comentarios.index2',compact('title','video')); // array asociativo

    }

    public function create2(Videos $video){

    return view('comentarios.create2',compact('video'));
   }


   public  function store2(Videos $video){

   
    $data = request()->validate([
     'body'=> 'required',
     
   ],[
    'body.required' => 'El campo nombre es obligatorio'
   ]);
   //dd($data);
    

    $comment = new Comentarios(['body' => $data['body']]);

    $video->comments()->save($comment);

    return redirect()->route('comentario.index2',$video);
   }

   

public  function  destroy2(Comentarios $comentario,Videos $video){
  $comentario->delete();
return  redirect()->route('comentario.index2',$video);


}

}
