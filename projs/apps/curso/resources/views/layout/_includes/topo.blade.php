<!DOCTYPE html>
<html>
    <head>
    <title>@yield('titulo')</title> <!-- Cria uma variavel blade -->
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <header>
            <nav>
                <div class="nav-wrapper deep-orange">
                  <a href="#!" class="brand-logo">Curso de Laravel</a>
                  <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    @if (Auth::guest()) <!-- Retorna true quando o usuário não está logado -->
                      <li><a href="{{ route('site.login') }}">Login</a></li>
                    @else    
                      <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
                      <li><a href="#">{{Auth::user()->name}}</a></li> <!-- Retorna o nome do usuário logado -->
                      <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
                    @endif
                  </ul>
                </div>
              </nav>
            
              <ul class="sidenav" id="mobile">
                <li><a href="/">Home</a></li>
                @if (Auth::guest()) <!-- Retorna true quando o usuário não está logado -->
                  <li><a href="{{ route('site.login') }}">Login</a></li>
                @else    
                  <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
                  <li><a href="#">{{Auth::user()->name}}</a></li> <!-- Retorna o nome do usuário logado -->
                  <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
                @endif
              </ul>            
        </header>