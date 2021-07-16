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
        Add project
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
        <form method="post" action="{{ route('projects.store') }}">
            <div class="form-group">
                @csrf
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" />
            </div>
            <button type="submit" class="btn btn-block btn-outline-dark">Create Project</button>
        </form>
    </div>
</div>
@endsection
