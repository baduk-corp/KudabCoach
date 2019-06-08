@extends('layouts.appBulma')

@section('content')
    <div class="container">

    <div class="card">
        <div class="card-header">
            <div class="card-header-title">
                Cadastrar consulta
            </div>
        </div>
        <div class="card-content">
            <form method="POST" action="{{ url("consultations/{$consultation->id}") }}">
                @if($consultation->id) @method('put') @endif
                @csrf
                <div class="field">
                    <label class="label">Data</label>
                        <input class="input" type="date"
                         name="date"
                         value="{{ $consultation->date ?? old('date') }}" class="form-group"
                         required="required">
                </div>

                <div class="field">
                    <label class="label">Horário</label>
                    <div class="select">
                        <select name="hour" class="form-group">
                            @for($i= 8;$i<22;$i++)
                                <option value="{{ ($i < 10) ? "0$i" : $i }}:00">{{$i}}:00</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <label class="label">Local</label>
                <div class="field">
                    <input class="input" type="text"
                        name="location"
                        value="{{ $consultation->location ?? old('location') }}"                           class="form-group"
                       required="required">
                </div>
            
                <label class="label">Comentários</label>
                <div class="control">
                    <textarea class="textarea" name="comments"
                              required="required"
                              class="form-control">{{ $consultation->comments ?? old('textarea') }}
                    </textarea>
                </div>

                <br>
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-success">Salvar</button>
                    </div>  
                </div>
                
            </form>
        </div>
    </div>

    </div>
@endsection
