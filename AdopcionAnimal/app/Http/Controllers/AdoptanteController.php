<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Adoptante;
use App\Animal;

class AdoptanteController extends Controller
{
	public function adoptar($animal_id){
		$animal = Animal::find($animal_id);

		return view('adoptante.CrearAdoptante', array(
       'animal'  => $animal,
       
        ));
	}
    public function crear($animal_id, Request $request){

    	$validatedData = $this->validate($request, [
    	'rut' => 'required',	
        'nombre' => 'required',
        'ApellidoP' => 'required',
        'ApellidoM' => 'required',
        'email' => 'required',
        'celular' => 'numeric|required'
		]);

    	$animal = Animal::findOrFail($animal_id);
        $adoptante = new Adoptante();
        $adoptante->animal_id = $animal->id;
        $adoptante->rut = $request->input('rut');
        $adoptante->nombre = $request->input('nombre');
        $adoptante->ApellidoP = $request->input('ApellidoP');
        $adoptante->ApellidoM = $request->input('ApellidoM');        
        $adoptante->email = $request->input('email');
        $adoptante->celular = $request->input('celular');
        $adoptante->mensaje = $request->input('descripcion');

        $adoptante->save();

        return redirect()->route('adoptar');
    }

    public function index()
    {
       $adoptantes = Adoptante::orderBy('id', 'desc')->paginate(5);
       

       return view('adoptante.Adoptantes', array(
       'adoptantes'  => $adoptantes,
        ));
    }

     public function eliminar($adoptante_id){
        $adoptante = Adoptante::find($adoptante_id);
       

        $adoptante->delete();

        return redirect()->route('Adoptantes');
    }
}
