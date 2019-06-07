@extends('layouts.appBulma')

@section('content')
<section>
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                @foreach($posts as $post)
                    <nav class="card">
                        <header class="card-header">
                            <p class="card-header-title">{{ $post->titulo }}</p>
                        </header>

                        <div class="card-content">
                            {!! \Illuminate\Support\Str::words($post->descricao, 30, '...') !!}
                        </div>

                        <footer class="card-footer">
                            <a href="{{ route('vip.read', ['id' => $post->id]) }}" class="card-footer-item">Ver mais</a>
                        </footer>
                    </nav>
                @endforeach

                <nav class="pagination" role="navigation" aria-label="pagination">
                    {{ $posts->links('layouts.bulmaPagination') }}
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
