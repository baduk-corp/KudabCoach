@extends('layouts.appBulma')

@section('content')
<div class="card-content">
    <form class="login-form" method="POST" action="{{ route('dashboard.update', ['id' => $post->id]) }}">
        {{ csrf_field() }}
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" id="id_titulo" type="text" name="titulo"
                        required autofocus value="{{ $post->titulo }}">
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <textarea class="textarea" id="id_descricao" name="descricao" rows="10">{{ $post->descricao }}</textarea>
                    </p>
                </div>
            </div>
        </div>

        <div class="field-body">
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-info">Atualizar</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
