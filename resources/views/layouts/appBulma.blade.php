<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Kudab Coach</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
    <section class="hero is-info is-medium is-bold">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item is-size-3 has-text-weight-bold" href="../">
                                Baduk
                            </a>
                            <span class="navbar-burger burger" data-target="navbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        <div id="navbarMenu" class="navbar-menu">
                            <div class="navbar-end">
                                <div class="tabs is-right">
                                    <ul>
                                        <li class="is-active"><a>Home</a></li>
                                        <li><a href="">Serviços</a></li>
                                        <li><a href="{{ url('/products') }}">Produtos</a></li>
                                        <li><a href="">Agenda</a></li>
                                        <li><a href="">Contato</a></li>
                                    </ul>
                                    @if (Route::has('login'))
                                        @if (Auth::check())
                                            <span class="navbar-item">
                                                <a class="button is-white is-outlined" href="https://github.com/baduk-corp/KudabCoach/">
                                                    <span class="icon">
                                                        <i class="fa fa-github"></i>
                                                    </span>
                                                    <span title="Hello from the other side">View Source</span>
                                                </a>
                                            </span>
                                        @else
                                            <span class="navbar-item">
                                                <a class="button is-white is-outlined" href="{{ url('/login') }}">
                                                    <span class="icon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <span title="Hello from the other side">Login</span>
                                                </a>
                                            </span>
                                            <span class="navbar-item">
                                                <a class="button is-white is-outlined" href="{{ url('/register') }}">
                                                    <span title="Hello from the other side">Registrar-se</span>
                                                </a>
                                            </span>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
    @yield('content')
    </section>
    </body>
</html>
