@extends('layouts.app')
@section('content')

<div  style="margin-left: 50px">
  <div class="row" >
<div class="col-md-9">
<h1>Usuarios</h1></div>
<div class="col-md-3">
  <a href="{{route('crearuser')}}" class="btn btn-outline-primary btn-lg" >Crear nuevo</a>
<br><br></div></div>
<div>
<div class="container col-md-10" align="center">
<ul class="list-unstyled" >
@foreach($usuarios as $usuario)

      <div class="card col-md-9"  style="width: 100%;">
        <div class="card-header">{{$usuario->email}}</div>
        <div class="card-body row" align="left">
        	
        		<div class="col-md-3" align="left">
        			<label>Nombre</label><br>
        			<label>Apellido Paterno</label><br>
        			<label>Apellido Materno</label>
        			
        		</div>
        		<div class="col-md-7" align="left">
        			<label>: {{$usuario->name}}</label><br>
        			<label>: {{$usuario->ApellidoP}}</label><br>
        			<label>: {{$usuario->ApellidoM}}</label>
        		</div>
        	
         	<div class="col-md-2" align="left">
         		 @if(Auth::check())      
      				
      				<a href="{{url('/eliminarUsuario/'.$usuario->id)}}" class="btn btn-outline-danger btn-lg" style="width: 100px">Eliminar</a>
    			 @endif
         	</div>
         	
        </div>
      </div>

    <br><br>

@endforeach
</ul>

</div>
{{$usuarios->links()}}

@endsection

