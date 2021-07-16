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
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="user_id">Employee_ID</label>
                <input type="text" class="form-control" name="user_id" value="{{ $order->user_id }}" />
            </div>
            <div>
                @csrf
                @method('PATCH')
                <label for="client_id">Client_ID</label>
                <input type="text" class="form-control" name="client_id" value="{{ $order->client_id }}" />
            </div>
            <div>
                @csrf
                @method('PATCH')
                <label for="project_id">Project_ID</label>
                <input type="text" class="form-control" name="project_id" value="{{ $order->project_id }}" />
            </div>
            <div>
                @csrf
                @method('PATCH')
                <label for="titolo">Titolo</label>
                <input type="text" class="form-control" name="titolo" value="{{ $order->titolo }}" />
            </div>
            <div>
                @csrf
                @method('PATCH')
                <label for="data">Data</label>
                <input type="text" class="form-control" name="data" value="{{ $order->data }}" />
            </div>
            <div>
                @csrf
                @method('PATCH')
                <label for="ora">Ora</label>
                <input type="text" class="form-control" name="ora" value="{{ $order->ora }}" />
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
