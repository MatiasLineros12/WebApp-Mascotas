@extends('layouts.app')

@section('content')

<div class="container" align="center">
<div class="card col-md-8">
  <div class="card-header"><h3>CREAR CARRERA</h3> </div>
  <div class="card-body" align="center" >

         <form action="{{route('guardarCarrera')}}" method="post" enctype="multipart/form-data">
          	
            {!! csrf_field() !!} <!--PARA EVITAR ATAQUES-->

            @if($errors->any())
            <div class= "alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif


          	 <div class="form-row">

                  <div class="form-group col-md-12" align="left">
                      <label for="name">Nombre</label>

                      <input type="name" class="form-control" id="name" placeholder="Introduzca nombre" name="nombre">
                  </div>
  
              <button type="submit" class="btn btn-success btn-lg">CREAR</button>

          </form>
  </div>
</div>
</div>

@endsection