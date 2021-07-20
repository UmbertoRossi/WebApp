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
        Esegui l'accesso!
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
        <form method="post" action="/login">
            <div class="form-group">
                @csrf
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" />
            </div>
            <div class="form-group">
                @csrf
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" />
            </div>
            <button type="submit" class="btn btn-block btn-outline-dark">Log In</button>
        </form>
    </div>
</div>
@endsection