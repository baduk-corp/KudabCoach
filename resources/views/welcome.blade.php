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
                                        @if (Route::has('login'))
                                            @if (Auth::check())
                                                <li><a href="{{ url('/vip') }}">Área VIP</a></li>
                                                <li><a href="{{ route('consultations.index') }}" class="nav-link">Minhas Consultas</a></li>
                                            @else
                                                <li class="is-active"><a>Home</a></li>
                                            @endif
                                        @endif
                                            <li><a href="{{ url('/services') }}">Serviços</a></li>
                                            <li><a href="{{ url('/products') }}">Produtos</a></li>
                                            <li><a href="{{ url('/contact-us') }}">Contato</a></li>
                                    </ul>
                                    @if (Route::has('login'))
                                        @if (Auth::check())
                                            <span class="navbar-item">
                                                <a class="button is-white is-outlined" href="https://github.com/baduk-corp/KudabCoach/">
                                                    <span class="icon">
                                                        <i class="fab fa-github"></i>
                                                    </span>
                                                    <span title="Hello from the other side">View Source</span>
                                                </a>
                                            </span>

                                            <span class="navbar-item">
                                                <a class="button is-white is-outlined" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                        <span class="icon">
                                                            <i class="fas fa-sign-out-alt"></i>
                                                        </span>
                                                        <span title="Hello from the other side">Sair</span>
                                                    </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
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
            <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">
                 Seu Creison Serviços de Coach
            </h1>
            <h2 class="subtitle">
                Kudab é o portal que contem todos os serviços de coach do Çeu Creison, como agendamento de horários, novos eventos e o exclusivo portal vip, em que nele você pode receber sempre novos textos motivacionais.
            </h2>
            </div>
        </div>
</section>
<div class="box cta">
    <p class="has-text-centered">
        <span class="tag is-primary">Novo</span> Agora a Kudab Coach possui um sistema de áudios motivacionais: <a href="{{ url('/products') }}">clique aqui</a>
    </p>
    </div>
    <section class="container">
        <div class="columns features">
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image has-text-centered">
                        <i class="fa fa-blog"></i>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4 class="is-size-4">Área vip</h4>
                            <p>Aqui voce pode consultar os post mais recentes de nosso Coach.</p>
                            <p><a class="button is-info is-rounded" href="{{ url('/vip') }}">Veja mais</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image has-text-centered">
                        <i class="fa fa-brain"></i>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4 class="is-size-4">Agenda de treimentos</h4>
                            <p>Aqui voce pode agendar e consultar seus treinamentos.</p>
                            <p><a class="button is-info is-rounded" href="{{ route('consultations.index') }}">Veja Mais</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image has-text-centered">
                        <i class="fa fa-broadcast-tower"></i>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4 class="is-size-4">Áudios Motivacionais</h4>
                            <p>Escutes nossos mais novos audios motivacionais aqui no Kudab Coach.</p>
                            <p><a class="button is-info is-rounded" href="{{ url('/products') }}">Veja Mais</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro column is-8 is-offset-2">
            <h2 class="title">Çeu Creison - Kudab Coach</h2><br>
            <p class="subtitle">O melhor Coach Motivacional para você e sua empresa!</p>
        </div>
    </section>
    </body>
</html>
