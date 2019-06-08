@extends('layouts.appBulma')

@section('content')
    <div class="container">

    <div class="card">
        <div class="card-header">
            <div class="card-header-title">
                Consulta de {{$consultation->date->format('d/m/Y H:i')}}
            </div>
        </div>
        <div class="card-content">
            <p>Local: {{$consultation->location}}</p>
            <p>Comentários: {!! $consultation->comments !!}</p>
        </div>

        <div class="card-footer">
            &nbsp;
            <a href="{{ route('consultations.edit',['id'=>$consultation->id]) }}" class="button is-warning">Editar</a>
            &nbsp;
            <form action="{{route('consultations.destroy',['id'=>$consultation->id])}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="button is-danger">Excluir</button>
            </form>
        </div>
    </div>

    </div>
@endsection
