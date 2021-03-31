<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('PETS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">





    <!-- Styles -->
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div id="app">
        <nav style="background-color: #ffba27" class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ ('PETS') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('nosotros')}}">¿Quienes somos?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('adoptar')}}">Adoptar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('Voluntario')}}">Voluntarios</a>
                            </li>
                        <!-- Authentication Links -->
                        @guest
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!--@if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif-->
                        @else
                          

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <!-- dropdown menu user -->
                                    <a class="dropdown-item" href="{{route('crearAnimal')}}">Animales</a>
                                    <a class="dropdown-item" href="{{route('CarrerasUVM')}}">Carreras</a>
                                    <a class="dropdown-item" href="{{route('Voluntarios')}}">Voluntarios</a>
                                    <a class="dropdown-item" href="{{route('Comunidad')}}">Comunidad</a>
                                    <a class="dropdown-item" href="{{route('Adoptantes')}}">Adoptantes</a>
                                    <a class="dropdown-item" href="{{route('Usuarios')}}">Usuarios</a>
                                    <a class="dropdown-item" href="{{route('gestionuser')}}">Cambiar Contraseña</a>
                                    <a class="dropdown-item" href="{{route('crearAviso')}}"> Crear avisos</a>
                                    <!-- dropdown menu user -->

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>


                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>

<!-- Footer -->

<footer style="background-color: #f39c12"  class="page-footer font-small mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-2">
          <h6 class="text-uppercase mb-4 font-weight-bold">UVM PETS</h6>
          <p>Grupo animalista de la Universidad Anónima, busca brindar apoyo a todos los animales desamparados que se encuentran dentro de los distintos campus de la universidad.</p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-2">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contenido</h6>
          <p>
            <a style="color: white" href="{{route('adoptar')}}">Adoptar</a>
          </p>
          <p>
            <a style="color: white" href="{{route('Voluntario')}}">Voluntario</a>
          </p>
          <p>
            <a style="color: white" href="{{route('home')}}">Avisos</a>
          </p>
        </div>
        <!-- Grid column -->




        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-2">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
          <p>
            <i class="fas fa-home mr-3"></i>Direccion #111, Comuna, Pais</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> email@anónima.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 56 9 11111111</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left">© 2019 Desarrollado por:
            <a href="https://mdbootstrap.com/education/bootstrap/">
              <strong style="color: white">Ingeniería Civil Informática</strong>
            </a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <a href="#" class="fa fa-facebook"></a>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
  <!--footer-->





</html>
