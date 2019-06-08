@extends('layouts.appBulma')

@section('content')
<section class="container">
        <div class="columns features">
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image has-text-centered">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4 class="is-size-4">Consultas presenciais</h4>
                            <p>Consultas motivacionais direto na sua casa ou em nosso consultorio!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image has-text-centered">
                        <i class="fas fa-microphone-alt"></i>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4 class="is-size-4">Palestras</h4>
                            <p>Contrate minhas palestras para motivacionar sua equipe!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image has-text-centered">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4 class="is-size-4">Consultas Online</h4>
                            <p>Consultas motivacionais online a hora que voce precisar!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
