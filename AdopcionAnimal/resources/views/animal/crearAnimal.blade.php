@extends('layouts.app')

@section('content')

<div class="container" align="center">
<div class="card col-md-8">
  <div class="card-header"><h3>INSERTAR ANIMAL</h3> </div>
  <div class="card-body">

         <form action="{{ route('saveAnimal') }}" method="post" enctype="multipart/form-data" class="col-lg-12">
          	
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
                      <label for="name">Nombre</label>
                      <input type="name" class="form-control" id="name" placeholder="Introduzca nombre" name="nombre">
                  </div>
                  <div class="form-group col-md-6"  align="left">
                      <label for="raza">Raza</label>
                      <input type="text" class="form-control" id="raza" placeholder="Introduzca raza" name="raza">
                  </div>
 
              </div>
<div class="form-row">

              <div class="form-group col-md-6"  align="left">
                    <label for="nacimiento">Nacimiento</label>
                    <input type="date" class="form-control" id="nacimiento" placeholder="Introduzca fecha de nacimiento" name="nacimiento">
              </div>
               <div class="form-group col-md-6" align="left">
                  <label for="sexo">Sexo</label>
                  <select id="sexo" class="form-control" name="sexo">
                        <option selected value="1">Macho</option>
                        <option value="0" >Hembra</option>
                  </select>
              </div>
              
</div>
           
              <div class="custom-file">
                     <div class="form-group" align="left">
    <label for="image">Imagen</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
              </div>
<br><br>
               <div class="form-group"  align="left">
              <label for="descripcion">Descripción</label>
              <textarea class="form-control" id="descripcion" name="descripcion">{{old('descripcion')}}</textarea>
            </div>
  


              <div class="form-row">

              <div class="form-group; col-md-6" >
                  <div class="form-check">
                  <input class="form-check-input" value="1" type="checkbox" id="gridCheck" name="vacunado">
                  <label class="form-check-label" for="gridCheck">Vacunado</label>
                  </div>
              </div>

              <div class="form-group; col-md-6">
                  <div class="form-check">
                  <input class="form-check-input" value="1" type="checkbox" id="gridCheck" name="esterelizado">
                  <label class="form-check-label" for="gridCheck">Esterelizado</label>
                  </div>
              </div>

              </div>

  <br><br>
              <button type="submit" class="btn btn-success btn-lg ">CREAR</button>

          </form>

  </div>
</div>
</div>

@endsection
