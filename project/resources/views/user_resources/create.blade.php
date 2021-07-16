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
        Add Employee
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
        <form method="post" action="{{ route('users.store') }}">
            <div class="form-group">
                @csrf
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" />
            </div>
            <div class="form-group">
                @csrf
                <label for="cognome">Cognome</label>
                <input type="text" class="form-control" name="cognome" />
            </div>
            <div class="form-group">
                @csrf
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" />
            </div>
            <div class="form-group">
                @csrf
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" />
            </div>
            <div class="form-group">
                @csrf
                <label for="mansione">Mansione</label>
                <input type="text" class="form-control" name="mansione" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Create User</button>
        </form>
    </div>
</div>
@endsection
