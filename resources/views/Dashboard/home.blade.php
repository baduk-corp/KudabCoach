<!DOCTYPE html>
<html>

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

    <!-- START NAV -->
    <nav class="navbar is-white">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item brand-text" href="../">
                    Kudab Admin
                </a>
                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{ url('/') }}">
                        Home
                    </a>
                </div>

            </div>
        </div>
    </nav>
    <!-- END NAV -->
    <div class="container">
        <div class="columns">
            <div class="column is-3 ">
                <aside class="menu is-hidden-mobile">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a class="is-active">Dashboard</a></li>
                    </ul>
                </aside>
            </div>
            <div class="column is-9">
                <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Olá, {{ Auth::user()->name }}.
                            </h1>
                            <h2 class="subtitle">
                                Bem vindo a dashboard
                            </h2>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="card events-card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Seus posts
                            </p>
                        </header>
                        <div class="card-table">
                            <div class="content">
                                <table class="table is-fullwidth is-striped">
                                    <tbody>

                                            @forelse($posts as $post)
                                                <tr>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <td>{{ $post->name }}</td>
                                                    <td>{{ $post->getAutor->name }}
                                                    <td><a href="{{ route('vip.read', ['id' => $post->id]) }}">{{ $post->titulo }}</a></td>
                                                    <td>{{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</td>
                                                    <td>
                                                        <a class="button is-small is-primary" href="{{ route('dashboard.edit', ['id' => $post->id]) }}">Editar</a>
                                                        <a class="button is-small is-danger" href="{{ route('dashboard.delete', ['id' => $post->id]) }}">Excluir</a>
                                                    </td>
                                                </tr>
                                        @empty
                                            <tr>
                                                <td><p>Nenhum post criado</p></td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="{{ route('dashboard.create') }}" class="card-footer-item">Criar novo</a>
                        </footer>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
