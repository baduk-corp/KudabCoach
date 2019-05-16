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
                                        <li><a href="">Produtos</a></li>
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
                <span class="tag is-primary">Novo</span> Agora a Kudab Coach possui um sistema de áudios motivacionais: <a href="#">clique aqui</a>
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
                                <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. 
                                Integer enim neque volutpat ac tincidunt vitae semper quis. 
                                Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                                <p><a class="button is-info is-rounded" href="#">Learn more</a></p>
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
                                <p>Ut venenatis tellus in metus vulputate. Amet consectetur adipiscing elit pellentesque.
                                 Sed arcu non odio euismod lacinia at quis risus. Faucibus turpis in eu mi bibendum neque egestas cmonsu songue. 
                                 Phasellus vestibulum lorem sed risus.</p>
                                <p><a class="button is-info is-rounded" href="#">Learn more</a></p>
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
                                <p>Imperdiet dui accumsan sit amet nulla facilisi morbi. Fusce ut placerat orci nulla 
                                pellentesque dignissim enim. Libero id faucibus nisl tincidunt eget nullam. Commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                <p><a class="button is-info is-rounded" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro column is-8 is-offset-2">
                <h2 class="title">Çeu Creison - Kudab Coach</h2><br>
                <p class="subtitle">Vel fringilla est ullamcorper eget nulla facilisi. Nulla facilisi nullam vehicula ipsum a. 
                Neque egestas congue quisque egestas diam in arcu cursus.</p>
            </div>
        </section>
    </body>
</html>
