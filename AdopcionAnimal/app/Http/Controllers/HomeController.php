<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aviso;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function nosotros()
    {
        return view('quienesSomos');
    }

     public function aviso()
    {
        return view('aviso.crear');
    }

     public function index()
    {
       $avisos = Aviso::all();
       
       return view('home', array(
       'avisos'  => $avisos,
       
        ));
    }

    public function crear(Request $request){
        //validar formulario
        $validatedData = $this->validate($request, [
        'nombre' => 'required',
        'descripcion' => 'required'
        ]);

        $aviso = new Aviso();
        $user =  \Auth::user();
        $aviso->nombre = $request->input('nombre');
        $aviso->descripcion = $request->input('descripcion');
        $aviso->usuario_id = $user->id;

        $aviso->save();

        return redirect()->route('home');
    }

    public function eliminar($aviso_id){
        $aviso = Aviso::find($aviso_id);
       
        $aviso->delete();

        return redirect()->route('home');
    }
}
