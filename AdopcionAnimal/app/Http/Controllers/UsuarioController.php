<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Validator;
use Hash;

class UsuarioController extends Controller
{
		public function index()
    {
       $usuarios = User::orderBy('id', 'desc')->paginate(5);
       return view('Usuarios', array(
       'usuarios'  => $usuarios,
       
        ));
    }

	public function create(){
        
    	return view('crearUsuario');
    }


     public function save(Request $request){

        $validate = $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User();
        

        $user->name = $request->input('name');
        $user->ApellidoP = $request->input('ApellidoP');
        $user->ApellidoM = $request->input('ApellidoM');
        $user->email = $request->input('email');
        $user->password = bcrypt( $request->input('password') );
        

        $user->save();

        return redirect()->route('Usuarios');

    }

      public function eliminar($usuario_id) 
    {
        $usuario = User::find($usuario_id); 
                           
            $usuario->delete();
        return redirect()->route('Usuarios');
    }

    public function gestion()
    {
    	$usuario =  \Auth::user();
        return view('gestionUsuario', array(
        'usuario'=> $usuario
        ));

    }

     public function update(Request $request)
    {


         $validate = $this->validate($request, [
            'name' => 'max:255',
            'actualpassword' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

     
            if (Hash::check($request->actualpassword, \Auth::user()->password)){
                $user = new User;
                $user->where('email', '=', \Auth::user()->email)
                     ->update(['password' => bcrypt($request->password),
                                'name' => $request->name,
                                'ApellidoP' => $request->ApellidoP,
                                'ApellidoM' => $request->ApellidoM,
                 ]);

                 return redirect()->route('Usuarios');  
            }
            else{
             return redirect()->route('Usuarios');   
            }


    }

}