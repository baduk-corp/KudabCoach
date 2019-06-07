@extends('layouts.appBulma')

@section('content')
<section>
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">{{ $post->titulo }}</p>
                        {{-- <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></i></small></p> --}}
                    </header>

                    <div class="card-content">
                        {{ $post->descricao }}
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
