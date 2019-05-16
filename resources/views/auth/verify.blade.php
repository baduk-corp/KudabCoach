@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">{{ __('Verifique seu endereço de e-mail') }}</p>
                </header>

                <div class="card-content">
                    @if (session('resent'))
                        <div class="notification is-success">
                            <button class="delete"></button>
                            {{ __('Um novo código de verificação foi enviado ao seu e-mail') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar verifique o código de verificação enviado ao seu e-mail') }}
                    {{ __('Se você não recebeu o e-mail: ') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para enviar novamente') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
