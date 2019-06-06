@extends('layouts.appBulma')

@section('content')

<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
            <h1>Create Post</h1>
            <div class="col-md-4">
                <form method="post" action="{{ route('dashboard.create') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" id="id_title" name="title"
                               aria-describedby="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="id_description" rows="3" name="description" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="button primary">Create post</button>
                </form>
            </div>
        </main>
    </div>
</div>

@endsection
