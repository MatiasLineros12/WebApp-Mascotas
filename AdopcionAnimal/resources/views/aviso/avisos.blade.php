<div class="container">

@foreach($avisos as $aviso)
  
<div class="card text-center">
  <div class="card-header">
    Aviso a la comunidad
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$aviso->nombre}}</h5>
    <p class="card-text">{{$aviso->descripcion}}</p>
    <a href="{{route('Voluntario')}}" class="btn btn-primary">¿Quieres ser voluntario?</a>
     @if(Auth::check())      
        <a href="{{url('/eliminarAviso/'.$aviso->id)}}" class="btn btn-danger">Eliminar aviso</a>
     @endif
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
<br>
@endforeach

    </div>