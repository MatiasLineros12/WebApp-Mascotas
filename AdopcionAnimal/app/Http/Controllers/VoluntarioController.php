<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Voluntario;
use App\Carrera;

class VoluntarioController extends Controller
{
	public function index()
    {
       $voluntarios = Voluntario::where("usuario_id","=",null)->
       //join("carrera","voluntario.carrera_id","=","carrera.id")->
       orderBy('id', 'desc')->paginate(5);
       return view('voluntario.Voluntarios', array(
       'voluntarios'  => $voluntarios,
       
        ));
    }


    public function voluntario(){

    	$carreras = Carrera::all();

    	return view('voluntario.CrearVoluntario', array(
       'carreras'  => $carreras,
       
        ));
    }

     public function crear(Request $request){

    	$validatedData = $this->validate($request, [
    	//'carrera_id' => 'required',	
        'nombre' => 'required',
        'ApellidoP' => 'required',
        'ApellidoM' => 'required',
        'email' => 'required',
        'celular' => 'numeric|required'
		]);

        $voluntario = new Voluntario();
        $voluntario->carrera_id = $request->input('carrera');
        $voluntario->nombre = $request->input('nombre');
        $voluntario->ApellidoP = $request->input('ApellidoP');
        $voluntario->ApellidoM = $request->input('ApellidoM');        
        $voluntario->email = $request->input('email');
        $voluntario->celular = $request->input('celular');
        $voluntario->mensaje = $request->input('mensaje');

        $voluntario->save();

        return redirect()->route('home');
    }

    public function eliminar($voluntario_id){
        $voluntario = Voluntario::find($voluntario_id);
       

        $voluntario->delete();

        return redirect()->route('Voluntarios');
    }


    public function aceptar($voluntario_id){
        
        $voluntario = Voluntario::find($voluntario_id);
        $user = \Auth::user();

        $voluntario->usuario_id = $user->id;

        $voluntario->save();
        
        return redirect()->route('Voluntarios');
    }


    /******************************************************/
    public function comunidad()
    {
       $voluntarios = Voluntario::where("usuario_id","!=",null)->
       //join("carrera","voluntario.carrera_id","=","carrera.id")->
       orderBy('id', 'desc')->paginate(5);
       return view('voluntario.Comunidad', array(
       'voluntarios'  => $voluntarios,
       
        ));
    }

}
