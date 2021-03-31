@extends('layouts.app')
@section('content')
  <img src="{{ asset('p1.jpg') }}" style="width: 100%; height: 300px" >
<br><br>
<div class="container col-md-11" align="center">
@foreach($animales as $animal)
<div class="card col-md-11"  style="width: 100%;">
        <div class="card-header"><strong>{{$animal->nombre}}</strong></div>
        <div class="card-body row" align="left">
          <div class="col-md-4">
           <img class="rounded-circle" style="min-width: 250px; min-height: 200px ;width: 250px; height: 200px; margin-right: 5%" src="images/{{$animal->image}}"> 
          </div>
            <div class="col-md-1" align="left"><br>
              <label>Sexo</label><br>
              <label>Raza</label><br>
              <label>Sanidad</label><br>
              <label>Descripción</label>
            </div>
            <div class="col-md-5" align="left"><br>
              
              
                @if($animal->sexo == 1)
               <label>: Macho </label>
                @else
                <label>: Hembra </label>
                @endif
                <br>
                <label>: {{$animal->raza}}</label><br>

               @switch(true)

                @case($animal->esterelizado ==1 and $animal->vacunado ==1)
               <label>: Vacunado y Esterelizado</label>
               @break
               @case($animal->vacunado ==1)
               <label>: Vacunado</label>
               @break
               @case($animal->esterelizado ==1)
               <label>: Esterelizado</label>
               @break
               @case($animal->esterelizado ==null && $animal->vacunado ==null)
               <label>: Ninguna</label>
               @break

               @endswitch

              <p>: {{$animal->descripcion}}</p>
            </div>
          
          <div class="col-md-1" align="left"><br>
              @if(Auth::check())
              <a href="{{url('/editar/'.$animal->id)}}" class="btn btn-warning btn-lg" style="width: 100px">Editar</a>
              @endif
              <a href="{{url('/Adoptante/'.$animal->id)}}" class="btn btn-outline-danger btn-lg">Adoptar</a>
              @if(Auth::check())
              <a href="{{url('/eliminarAnimal/'.$animal->id)}}" class="btn btn-danger btn-lg" style="width: 100px">Eliminar</a>
              @endif
          </div>
</div>
</div>
<br>
@endforeach
</div>
{{$animales->links()}}








<!--
<div class="container col-md-10" align="center">
<ul class="list-unstyled" >
@foreach($animales as $animal)
  <li class="media my-4" style="height: 230px; border: 4px solid  #facac7; margin: 35px; padding-top: 2%; padding-left: 1%">
      <img class="rounded-circle" style="min-width: 250px; min-height: 200px ;width: 250px; height: 200px; margin-right: 5%" src="images/{{$animal->image}}">

      <div class="card" style="width: 100%; height: 200px">
        <div class="card-header">{{$animal->nombre}}</div>
        <div class="card-body" align="left">
          <div>
        <div class="col-md-4" style="float: left;">
          Sexo<br>
          Raza<br>
          Descripción<br>
        </div>
        <div class="col-md-8" style="float: left">
          :&nbsp;&nbsp;{{$animal->sexo}}<br>
          :&nbsp;&nbsp;{{$animal->raza}}<br>
          :&nbsp;&nbsp;{{$animal->descripcion}}
        </div>
      </div>
        </div>
      </div>

    <div class="col-md-2" style="margin-left: 5%">
      <br><br>
      
      @if(Auth::check())
      <a href="{{url('/editar/'.$animal->id)}}" class="btn btn-warning btn-lg" style="width: 100px">Editar</a>
      @endif
      <a href="{{url('/Adoptante/'.$animal->id)}}" class="btn btn-outline-danger btn-lg">Adoptar</a>
      @if(Auth::check())
      <a href="{{url('/eliminarAnimal/'.$animal->id)}}" class="btn btn-danger btn-lg" style="width: 100px">Eliminar</a>
      @endif
      </div>
  </li>
@endforeach
</ul>

</div>
{{$animales->links()}}-->
@endsection