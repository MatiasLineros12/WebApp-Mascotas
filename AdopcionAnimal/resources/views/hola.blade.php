@extends('layouts.app')

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 600px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="perro.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="perro.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="perro.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>



                   


                           
                      
<ul class="list-unstyled" style="margin: 200px">
  <li class="media my-4" style="height: 200px">
    <img src="dog1.jpg" class="rounded-circle" alt="...">
    <div class="media-body col-md-10">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
    </div>
    <div class="col-md-2">
      <br><br>
      <button type="button" class="btn btn-danger btn-lg">Large button</button>

      </div>
  </li>
  <li class="media my-4" style="height: 200px">
    <img src="dog1.jpg" class="rounded-circle" alt="...">
    <div class="media-body col-md-10">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
    </div>
    <div class="col-md-2">
      <br><br>
      <button type="button" class="btn btn-danger btn-lg">Large button</button>

      </div>
  </li><li class="media my-4" style="height: 200px">
    <img src="dog1.jpg" class="rounded-circle" alt="...">
    <div class="media-body col-md-10">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
    </div>
    <div class="col-md-2">
      <br><br>
      <button type="button" class="btn btn-danger btn-lg">Large button</button>

      </div>
  </li>
</ul>


@endsection