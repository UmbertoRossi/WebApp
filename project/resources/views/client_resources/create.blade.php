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
        Add Client
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
        <form method="post" action="{{ route('clients.store') }}">
            <div class="form-group">
                @csrf
                <label for="ragioneSociale">Ragione Sociale</label>
                <input type="text" class="form-control" name="ragioneSociale" />
            </div>
            <div class="form-group">
                <label for="partitaIva">Parita Iva</label>
                <input type="text" class="form-control" name="partitaIva" />
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="tel" class="form-control" name="telefono" />
            </div>
            <button type="submit" class="btn btn-block btn-outline-dark">Crea cliente</button>
        </form>
    </div>
</div>
@endsection
