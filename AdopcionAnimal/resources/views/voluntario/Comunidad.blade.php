@extends('layouts.app')
@section('content')


<div style="margin-left: 50px">
<h1>Comunidad de voluntarios UVM</h1>
<div><br>
<div class="container col-md-10" align="center">
<ul class="list-unstyled" >
@foreach($voluntarios as $voluntario)

      <div class="card col-md-9"  style="width: 100%;">
        <div class="card-header">{{$voluntario->nombre}}&nbsp;{{$voluntario->ApellidoP}}&nbsp;{{$voluntario->ApellidoM}}</div>
        <div class="card-body row" align="left">
        	
        		<div class="col-md-3" align="left">
        			<label>Carrera universitaria</label>
        			<label>Correo electrónico</label>
        			<label>Numero celular</label><br>
        			<label>Mensaje</label>
        		</div>
        		<div class="col-md-7" align="left">
        			<label>: {{$voluntario->carrera->nombre}}</label><br>
        			<label>: {{$voluntario->email}}</label><br>
        			<label>: {{$voluntario->celular}}</label><br>
        			<p>: {{$voluntario->mensaje}}</p>
        		</div>
        	
         	<div class="col-md-2" align="left">
         		 @if(Auth::check())      
      				<br>
      				<a href="{{url('/eliminarVoluntario/'.$voluntario->id)}}" class="btn btn-outline-danger btn-lg" style="width: 100px">Eliminar</a>
    			 @endif
         	</div>
         	
        </div>
      </div>

    <br><br>

@endforeach
</ul>

</div>
{{$voluntarios->links()}}

@endsection
