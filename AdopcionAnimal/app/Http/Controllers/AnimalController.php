<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response;
//use Illuminate\Http\Response;

use App\Animal;

class AnimalController extends Controller
{
     public function index()
    {
       $animal = Animal::orderBy('id', 'desc')->paginate(5);
       

       return view('animal.Animales', array(
       'animales'  => $animal,
       
        ));
    }

     public function crearAnimal(){
        $animal = Animal::all();                   //$tabla = Modelo::all();
        return view('animal.crearAnimal', array(
        'animal' => $animal
        ));
    }

        public function saveAnimal(Request $request){
        //validar formulario
        $validatedData = $this->validate($request, [
        'nombre' => 'required',
        'raza' => 'required',
        'nacimiento' => 'required',
        'sexo' => 'required',
        //'vacunado' => 'required'
        //'esterelizado' => 'required'
        ]);

        $animal = new Animal();
        $user = \Auth::user();
        $animal->usuario_id = $user->id;
        $animal->nombre = $request->input('nombre');
        $animal->raza = $request->input('raza');
        $animal->nacimiento = $request->input('nacimiento');
        $animal->sexo = $request->input('sexo');        
        $animal->vacunado = $request->input('vacunado');
        $animal->esterelizado = $request->input('esterelizado');
        $animal->descripcion = $request->input('descripcion');


        //subida de la imagen

        $image = $request->file('image');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            /*
            \Storage::disk('public')->put($image_path, \File::get($image));
            */
            $image->move(public_path().'/images/', $image_path);
            $animal->image = $image_path; 
        }



        $animal->save();

         return redirect()->route('home')->with(array(
        'message' => 'El video se ha subido correctamente'
        ));

    }

    public function eliminar($animal_id){
        $animal = Animal::find($animal_id);
       

        $animal->delete();

        return redirect()->route('adoptar');
    }

    public function editar($animal_id)
    {
       $animal = Animal::find($animal_id);

        return view('animal.editarAnimal', array(
        'animal'=> $animal
        ));
    }

    public function actualizar($animal_id, Request $request){
        $validate = $this->validate($request, [
        'nombre' => 'required',
        'raza' => 'required',
        'nacimiento' => 'required',
        'sexo' => 'required',
        ]);

        $user =  \Auth::user();
        $animal = Animal::findOrFail($animal_id);
        $animal->usuario_id = $user->id;
        $animal->nombre = $request->input('nombre');
        $animal->raza = $request->input('raza');
        $animal->nacimiento = $request->input('nacimiento');
        $animal->sexo = $request->input('sexo');        
        $animal->vacunado = $request->input('vacunado');
        $animal->esterelizado = $request->input('esterelizado');
        $animal->descripcion = $request->input('descripcion');
       
        $animal->update();

      
        return redirect()->route('adoptar');
    }
    
/* LARAVEL 5.2 -> ENLACE SIMBOLICO 5.7
    public function getImage($filename){
        $file = \Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
*/

}
