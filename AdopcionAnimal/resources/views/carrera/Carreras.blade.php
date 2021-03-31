@extends('layouts.app')

@section('content')

<div class="row" style="width: 900px; margin-left: 250px">
	<div class="col-md-6">
<button>BUSCADOR</button>
</div>
<div align="right" class="col-md-6">
<a class="btn btn-primary btn-lg" href="{{route('crearCarrera')}}">Crear</a>
</div>
<br><br><br>
</div>

@foreach($carreras as $carrera)
<div class="card" style="width: 900px; margin-left: 250px" >
  <h5 class="card-header">Carrera UVM</h5>
  <div class=" card-body row"><br>
    <h2 class="card-title col-md-5">{{$carrera->nombre}}</h2>
    
<!--botones-->
  	
<a class="btn btn-warning btn-lg col-md-3" href="{{route('detalleCarrera', ['carrera_id'=>$carrera->id])}}">Editar</a>&nbsp;
<a class="btn btn-danger btn-lg col-md-3" href="{{route('eliminarCarrera', ['carrera_id'=>$carrera->id])}}">Eliminar</a>
  </div>
</div>
<br>
@endforeach



@endsection