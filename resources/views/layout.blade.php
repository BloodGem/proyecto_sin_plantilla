
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!-- FULL CALENDAR -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>


    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="navbar-nav">
            <li class="nav-item">

              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{route('home')}} ">Dentistas</a>
            </li>

            @if (auth()->check())

            <li class="nav-item">
              <a class="nav-link" href="/logout">Link Cerrar sesión de {{auth()->user()->email}}</a>
            </li>

            @if (auth()->user()->rol === 'administrador')

            <li class="nav-item">
              <a class="nav-link {{ request()->is('usuarios') ? 'active' : '' }}" href="{{route('usuarios.index')}}">Usuarios</a>
            </li>

            @endif
            @endif

            @if (auth()->guest())


            <li class="nav-item">
              <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('usuarios/create') ? 'active' : '' }}" href="{{route('usuarios.create')}}">Registrarse</a>
            </li>

        @endif
          </ul>
        </div>
      </div>
    </nav>









    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
		@yield('contenido')
    </main>



    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('/js/dashboard.js') }}" defer></script> <!-- AGENDA -->
<script src="{{ asset('/js/agenda.js') }}" defer></script> <!-- AGENDA -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- Scripts -->

   
  </body>
</html>
