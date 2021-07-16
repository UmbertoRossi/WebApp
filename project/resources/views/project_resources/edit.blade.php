@extends('layout')
@section('content')
<style>
    .container {
        max-width: 450px;
    }

    .push-top {
        margin-top: 50px;
    }

</style>
<div class="card push-top">
    <div class="card-header">
        Edit & Update : Project
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('projects.update', $project->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{ $project->nome }}" />
            </div>
            <button type="submit" class="btn btn-block btn-outline-dark">Update</button>
        </form>
        <button href="projects/index"class="btn btn-outline-dark mx-auto">Torna indietro</button>
    </div>
</div>
@endsection
