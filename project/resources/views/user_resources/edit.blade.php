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
        Edit & Update : Employee
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
        <form method="post" action="{{ route('users.update', $user->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{ $user->nome }}" />
            </div>
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="cognome">Cognome</label>
                <input type="text" class="form-control" name="cognome" value="{{ $user->cognome }}" />
            </div>
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" value="{{ $user->password }}" />
            </div>
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $user->email }}" />
            </div>
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="mansione">Mansione</label>
                <input type="text" class="form-control" name="mansione" value="{{ $user->mansione }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Update</button>
        </form>
    </div>
</div>
@endsection
