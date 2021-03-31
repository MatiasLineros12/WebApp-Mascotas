<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

use Symfony\Component\HttpFoundation\Response;

use App\Carrera;
use App\User;

class CarreraController extends Controller
{
     public function index()
    {
       $carreras = Carrera::all();
       
       return view('carrera.Carreras', array(
       'carreras'  => $carreras,
       
        ));
    }
    public function detalle($carrera_id){
        $carrera = Carrera::find($carrera_id);

        return view('carrera.CarreraDetalle', array(
        'carrera'=> $carrera
        ));
    }

     public function actualizar($carrera_id, Request $request){
        $validate = $this->validate($request, [
        'nombre' => 'required'
        ]);

        $user =  \Auth::user();
        $carrera = Carrera::findOrFail($carrera_id);
        $carrera->nombre = $request->input('nombre');
       
        $carrera->update();

      
        return redirect()->route('CarrerasUVM')->with(array(
        'message' => 'La carrera se ha editado correctamente'
        ));
    }

    public function eliminar($carrera_id){
        $carrera = Carrera::find($carrera_id);
       

        $carrera->delete();

        return redirect()->route('CarrerasUVM');
    }

    public function crear()
    {
        return view('carrera.crearCarrera');
    }

    public function guardar(Request $request){
        //validar formulario
        $validatedData = $this->validate($request, [
        'nombre' => 'required',
        ]);

        $carrera = new Carrera();
        $carrera->nombre = $request->input('nombre');
 


        $carrera->save();

         return redirect()->route('CarrerasUVM')->with(array(
        'message' => 'El video se ha subido correctamente'
        ));

    }


}
