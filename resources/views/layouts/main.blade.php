<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <header style="display: flex; align-items:center; justify-content:space-between">
            <nav class="nav" style="display: flex; align-items:center;">
                <div class="dropdown">
                    <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                        Ferramentas
                    </button>
                    <ul class="dropdown-menu dropdown-menu">
                        <li><a class="nav-link dropdown-item" href="/">
                            Lista de ferramenta</a>
                        </li>
                        <li><a class="nav-link dropdown-item" href="/ferramenta/create">
                            Cadastrar Ferramenta</a>
                        </li>
                        <li>
                            @auth
                                <a class="nav-link dropdown-item" href="/dashboard">Minhas Ferramentas</a>
                            @endauth
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                        Funcionarios
                    </button>
                    <ul class="dropdown-menu dropdown-menu">
                        <li><a class="nav-link dropdown-item" href="/funcionario">
                            Lista de funcionarios</a>
                        </li>
                        <li><a class="nav-link dropdown-item" href="/funcionario/register">
                            Cadastrar Funcionario</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                        Setores
                    </button>
                    <ul class="dropdown-menu dropdown-menu">
                        <li><a class="nav-link dropdown-item" href="/setores">
                            Lista de Setores</a>
                        </li>
                        <li><a class="nav-link dropdown-item" href="/setores/register">
                            Cadastrar Setor</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- <a class="nav-link"  href="/register">Setores</a> -->

            </nav>
            <div style="margin-right: 15px; display:flex">
                @auth
                    <form action="/logout" method="POST"  >
                        @csrf
                            <a style="text-decoration: none;" href="/logout" onclick="event.preventDefault(); 
                            this.closest('form').submit();">Sair</a>
                    </form>
                @endauth
                @guest
                    <a  href="/login" style="text-decoration: none; margin: 0 7px 0 -10px;">Login</a>
                    <a  href="/register" style="text-decoration: none;">Cadastrar</a>
                @endguest   
            </div>
            
            
        </header>
        @if (session('success'))
            <div class="container alert alert-success" id="success-msg">
                {{ session('success') }}
            </div>
        @endif
        
        <div>
            @yield('content')
        </div>

        <script src="{{ asset('js/success.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>