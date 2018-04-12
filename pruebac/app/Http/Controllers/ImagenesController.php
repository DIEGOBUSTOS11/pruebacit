<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Comentarios;
use App\Imagen;
use App\Videos;
use Illuminate\Support\Facades\DB;

class ImagenesController extends Controller
{
    public function  index(){

     
     $imagenes = Imagen::all(); //utilizamso  el modelo eloquent
     $i=Imagen::first();

     /*$i->comments()->create(['body'=>'hola 3 mundo']);
     dd($i);*/
      // return view('users.index')
      // ->with('users',User::all())
      // ->with('title','Listado de usuarios');
 
    
   //dd($users); //imprimo todos los usuarios
    $title = 'Listado de Imagenes';
    return view('imagenes.index',compact('title','imagenes')); // array asociativo
       

    }


    public function show(imagen $imagen)
    {

    //$user  = User::findOrFail($id);// lo vuelve una respuesta de tipo 404

   /// if($user == null){

      //return view('errors.404');
     // return  response()->view('errors.404', [], 404);
    //}
    //exit('linea no alcanzada');
   // dd($user);

    return view('imagenes.show',compact ('imagen'));
      //return "Mostrar detalle del usuario: {$id}";

   }

    public function create(){
    return view('imagenes.create');
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
    Imagen::create([

      'titulo'=> $data['titulo'],
      'contenido' => $data['contenido'],
      'categoria' => ($data ['categoria'])
    ]);

    return redirect()->route('imagen.index');
   }

   public function edit(Imagen $imagen){
    return  view('imagenes.edit', ['imagen' => $imagen]);

   }



  public function update( Imagen $imagen){

 //dd('actualizar');

   $data = request()->validate([

   'titulo'=> 'required',
    'contenido'=>'required',
    'categoria' =>'required',

   ]);

  
    $imagen->update($data);
    return  redirect()->route('imagen.show',['imagen'=>$imagen]);       

   //("/usuarios/{$user->id}");
   }


public  function  destroy(Imagen $imagen){
  $imagen->comments()->delete();
  $imagen->delete();
return  redirect()->route('imagen.index');


}

}
