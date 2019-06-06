{{-- @extends('layouts.appBulma')

@section('content')
<section>

<div class="container">
<h1>Contact US Form</h1>

@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'contactus.store']) !!}

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
<button class="btn btn-success">Contact US!</button>
</div>

{!! Form::close() !!}

</div>

</section>
@endsection --}}


@extends('layouts.appBulma')
@section('content')

<div class="columns is-marginless is-centered">
    <div class="column is-5">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">Contact US Form</p>
            </header>

            <div class="card-content">
                {!! Form::open(['route'=>'contactus.store']) !!}
                <div class="field is-horizontal">
                    <div class="field-label">
                        {!! Form::label('Name:', old('name'), ['class'=>'label']) !!}
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                {!! Form::text('name', old('name'), ['class'=>'input', 'placeholder'=>'Enter Name']) !!}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label">
                        {!! Form::label('Email:', old('email'), ['class'=>'label']) !!}
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                {!! Form::text('email', old('email'), ['class'=>'input', 'placeholder'=>'Enter Email']) !!}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label">
                        {!! Form::label('Message:', old('message'), ['class'=>'label']) !!}
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                                {!! Form::textarea('message', old('message'), ['class'=>'textarea', 'placeholder'=>'Enter Message']) !!}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field-body">
                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-primary">Contact US!</button>
                        </div>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
