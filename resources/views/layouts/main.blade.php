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
            <nav class="nav" >
                <a class="nav-link active" aria-current="page" href="/">Ferramentas</a>
                <a class="nav-link" href="/ferramenta/create">Cadastrar Ferramenta</a>
                @auth
                    <a class="nav-link" href="/dashboard">Minhas Ferramentas</a>
                @endauth
                
                @guest
                    <a class="nav-link" href="/login">Entrar</a>
                    <a class="nav-link"  href="/register">Cadastrar</a>
                @endguest
            </nav>
            @auth
                <div style="margin-right: 15px;">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #fff; color: #000; border:none">
                            Funcionarios
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item active" href="/funcionario">
                                Lista de funcionarios</a>
                            </li>
                            <li><a class="dropdown-item" href="/funcionario/register">
                                Cadastrar</a>
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); 
                                        this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            @endauth
            
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