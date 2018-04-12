<?php

namespace App\Http\Controllers;
use App\Videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function  index(){

     
     $videos = Videos::all(); //utilizamso  el modelo eloquent
      // return view('users.index')
      // ->with('users',User::all())
      // ->with('title','Listado de usuarios');
 
    
   //dd($users); //imprimo todos los usuarios
    $title = 'Listado de videos';
    return view('videos.index',compact('title','videos')); // array asociativo
       

    }


    public function show(videos $video)
    {

    //$user  = User::findOrFail($id);// lo vuelve una respuesta de tipo 404

   /// if($user == null){

      //return view('errors.404');
     // return  response()->view('errors.404', [], 404);
    //}
    //exit('linea no alcanzada');
   // dd($user);

    return view('videos.show',compact ('video'));
      //return "Mostrar detalle del usuario: {$id}";

   }

    public function create(){
    return view('videos.create');
   }

   public  function store(){

   // return  redirect ('usuarios/nuevo')
   // ->withInput();

    $data = request()->validate([
     'titulo'=> 'required',
     'contenido'=>'required',
     'categoria' =>'required',
   
   ],[
    'titulo.required' => 'El campo titulo es obligatorio'
   ]);
   //dd($data);
    Videos::create([

      'titulo'=> $data['titulo'],
      'contenido' => $data['contenido'],
      'categoria' => ($data ['categoria']),
     
      
    ]);

    return redirect()->route('video.index');
   }

   public function edit(Videos $video){
    return  view('videos.edit', ['video' => $video]);

   }



  public function update( Videos $video){

 //dd('actualizar');

   $data = request()->validate([

   'titulo'=> 'required',
    'contenido'=>'required',
    'categoria' =>'required',
     

   ]);

  
    $video->update($data);
    return  redirect()->route('video.show',['video'=>$video]);       

   //("/usuarios/{$user->id}");
   }


public  function  destroy(Videos $video){
  $video->comments()->delete();
  $video->delete();
return  redirect()->route('video.index');


}
}
