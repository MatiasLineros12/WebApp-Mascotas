@extends('layouts.app')

@section('content')


<div class="container" align="center">

<div class="card col-md-8">
  <div class="card-header"><h3>COMPLETE SUS DATOS</h3> </div>
  <div class="card-body">

         <form action="{{ route('crearAdoptante', ['animal_id' => $animal->id]) }}" method="post" enctype="multipart/form-data" class="col-lg-12">
          	
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

            	<div class="form-group col-md-6" align="left">
                      <label for="rut">Rut</label>
                      <input type="rut" class="form-control" id="rut" placeholder="Introduzca rut" name="rut">
                  </div>

          

                  <div class="form-group col-md-6" align="left">
                      <label for="name">Nombres</label>
                      <input type="name" class="form-control" id="name" placeholder="Introduzca nombres" name="nombre">
                  </div>
            </div>


          	 <div class="form-row">

                  <div class="form-group col-md-6" align="left">
                      <label for="ApellidoP">Apellido paterno</label>
                      <input type="text" class="form-control" id="ApellidoP" placeholder="Introduzca apellido paterno" name="ApellidoP">
                  </div>
                  <div class="form-group col-md-6"  align="left">
                      <label for="ApellidoM">Apellido materno</label>
                      <input type="text" class="form-control" id="ApellidoM" placeholder="Introduzca apellido materno" name="ApellidoM">
                  </div>
 
              </div>
              
              <div class="form-row">

              <div class="form-group col-md-6"  align="left">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" placeholder="Introduzca correo electronico" name="email">
              </div>
               <div class="form-group col-md-6" align="left">
                  <label for="celular">Celular</label>
                  <div class="input-group mb-2 mr-sm-2">
                     	<div class="input-group-prepend">
                        	<div class="input-group-text">+56</div>
                     	</div>
                  		<input type="text" id="celular" class="form-control" name="celular" placeholder="Introduzca numero celular">
                  </div>
              </div>
              
			  </div>

               <div class="form-group"  align="left">
              <label for="mensaje">Mensaje</label>
              <textarea class="form-control" id="mensaje" name="descripcion">{{old('mensaje')}}</textarea>
            </div>
 
              <button type="submit" class="btn btn-success btn-lg ">CREAR</button>

          </form>
  </div>
</div>
</div>


@endsection