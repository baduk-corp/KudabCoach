@extends('layouts.appBulma')

@section('content')
    <div class="container">

    <div class="card">
        <div class="card-header">
            <p class="card-header-title">
            Minhas Consultas
            <br>
            <a href="{{ route('consultations.create') }}" class="button is-light">Incluir</a>
            </p>
        </div>
        <div class="card-content">        
            <table class="table">
                <thead>
                <tr>
                    <th>Data</th>
                    <th>Local</th>
                    <th>Comentários</th>
                </tr>
                </thead>
                <tbody>
                @foreach($consultations as $consultation)
                <tr >
                    <td>
                        <a href="{{ route('consultations.show',['id'=>$consultation->id]) }}">
                        {{ $consultation->date->format('d/m/Y H:i') }}
                        </a>
                    </td>
                    <td>{{ $consultation->location }}</td>
                    <td>{{ $consultation->comments }}</td>
                    <td></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>
@endsection
