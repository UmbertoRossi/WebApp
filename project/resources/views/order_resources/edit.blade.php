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
        Edit & Update : Order
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
        <form method="post" action="{{ route('orders.update', $order->id) }}">
            <label for="user_id">ID Impiegato</label>
            <div class="form-group">
                <select name="user_id">
                    <option selected></option>
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">ID {{$user->id}} {{$user->nome}}</option>
                    @endforeach
                </select>
            </div>
            <label for="client_id">ID Cliente</label>
            <div class="form-group">
                <select name="client_id">
                    <option></option>
                    @foreach ($clients as $client)
                    <option value="{{$client->id}}">ID {{$client->id}} {{$client->ragioneSociale}}</option>
                    @endforeach
                </select>
            </div>
            <label for="project_id">ID Progetto</label>
            <div class="form-group">
                <select name="project_id">
                    <option selected></option>
                    @foreach ($projects as $project)
                    <option value="{{$project->id}}">ID {{$project->id}} {{$project->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                @csrf
                <label for="titolo">Titolo</label>
                <input type="text" class="form-control" name="titolo" />
            </div>
            <div class="form-group">
                @csrf
                <label for="data">Data</label>
                <input type="date" class="form-control" name="data" />
            </div>
            <div class="form-group">
                @csrf
                <label for="ora">Ora</label>
                <input type="time" class="form-control" name="ora" />
            </div>
            <div>
                @csrf
                @method('PATCH')
                <label for="descrizione">Descrizione</label>
                <input type="text" class="form-control" name="descrizione" value="{{ $order->descrizione }}" />
            </div>
            <button style="margin-top:15px" type="submit" class="btn btn-block btn-outline-dark">Update</button>
        </form>
    </div>
</div>
@endsection
