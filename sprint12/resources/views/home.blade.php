<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            @if (Route::has('login'))
    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
        @auth
            {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a> --}}
        
            <p class="titleWelcome">¡BIENVENIDO@!{{ Auth::user()->name }}</p> 
            <button type="button" class="btn btn-info"><a href="{{route('equipo.create')}}" class="botonEnlace">Crear equipo</a> </button>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
            
                <button type="button" class="btn btn-primary" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
            </button>
            </form>
          

        @else
        <button type="button" class="btn btn-success"><a href="{{ route('login') }}" class="text-sm text-gray-700 underline loginRegister">Iniciar sesión</a></button>

            @if (Route::has('register'))
            <button type="button" class="btn btn-success"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline loginRegister">Registrarse</a></button>
            @endif
        @endauth
    {{-- </div> --}}
@endif
          </a>
        </div>
      </nav>

    
    <h1>Lista de partidos</h1>
   
    <section class="container">
        

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Equipo Local</th>
                <th scope="col">Goles equipo Local</th>
                <th scope="col">Goles equipo visitante</th>
                <th scope="col">Equipo visitante</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($liga as $equipo)
              <tr>
                <th scope="row">{{$equipo->id}}</th>
                <td>{{$equipo->equipoLocal}}</td>
                <td>{{$equipo->golesLocal}}</td>
                <td>{{$equipo->golesVisitante}}</td>
                <td>{{$equipo->equipoVisitante}}</td>

                @auth
                <td><button type="button" class="btn btn-info"><a href="{{route('equipo.edit', $equipo->id)}}" class="botonEnlace">Editar</a></button></td>
                @endauth
              </tr>
              
              @endforeach
            </tbody>
          </table>

    </section>
    

</body>

<style>
    .loginRegister {
        color: white;
        text-decoration: none;
        font-size: 20px;
        margin: auto 10px;
    }
    .titleWelcome{
      text-transform: uppercase;
       font-size: 20px;
       background-color: aqua;

    }
 
    h1{
        text-align: center;
        color: aqua;
    }
    .botonEnlace{
      text-decoration: none;
      color: black;
    }
</style>

</html>