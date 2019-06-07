@extends('layouts.appBulma')

@section('content')
<div class="card-content">
    <form class="login-form" method="POST" action="{{ route('dashboard.create') }}">
        {{ csrf_field() }}
        <div class="field is-horizontal">

            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" id="id_titulo" type="text" name="titulo"
                        required autofocus placeholder="Digite o titulo do seu post">
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        {{-- <textarea class="textarea" id="id_descricao" name="descricao"
                            placeholder="Digite o texto do seu post" rows="10"></textarea> --}}
                        <div id="editor-container" style="height: 130px;"></div>
                        <input name="descricao" type="hidden">
                    </p>
                </div>
            </div>
        </div>

        <div class="field-body">
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-info">Enviar</button>
                </div>
            </div>
        </div>


    </form>
</div>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor-container', {
            placeholder: 'Digite o post para seu blog',
            theme: 'snow'
            });
        var form = document.querySelector('form');
        form.onsubmit = function() {
            // Populate hidden form on submit
            var descricao = document.querySelector('input[name=descricao]');
            descricao.value = quill.getContents();
            console.log("ATIVEI")

            return false;
        };
</script>
@endsection
