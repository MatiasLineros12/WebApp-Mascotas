@extends('layouts.app')
@section('content')


<div class="container col-md-10" align="center">
<ul class="list-unstyled" >
@foreach($adoptantes as $adoptante)

      <div class="card col-md-9"  style="width: 100%;">
        <div class="card-header">{{$adoptante->nombre}}&nbsp;{{$adoptante->ApellidoP}}&nbsp;{{$adoptante->ApellidoM}}</div>
        <div class="card-body row" align="left">
        	
        		<div class="col-md-3" align="left">
        			<label>Run</label><br>
        			<label>Correo electrónico</label>
        			<label>Numero celular</label><br>
        			<label>Mensaje</label>
        		</div>
        		<div class="col-md-7" align="left">
        			<label>: {{$adoptante->rut}}</label><br>
        			<label>: {{$adoptante->email}}</label><br>
        			<label>: {{$adoptante->celular}}</label><br>
        			<p>: {{$adoptante->mensaje}}</p>
        		</div>
        	
         	<div class="col-md-2" align="left">
         		 @if(Auth::check())      
      				<br>
      				<a href="{{url('/eliminarAdoptante/'.$adoptante->id)}}" class="btn btn-outline-danger btn-lg" style="width: 100px">Eliminar</a>
    			 @endif
         	</div>
         	
            <div class="container"style="width: 100%" align="center">
             <img align="center" class="rounded-circle" style="width: 250px; height: 200px" src="/images/{{$adoptante->animal->image}}">     
           </div>
          

        </div>
      </div>

    <br><br>

@endforeach
</ul>

</div>
{{$adoptantes->links()}}

@endsection