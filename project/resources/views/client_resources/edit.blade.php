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
        Edit & Update : Client
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
        <form method="post" action="{{ route('clients.update', $client->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="ragioneSociale">Ragione Sociale</label>
                <input type="text" class="form-control" name="ragioneSociale" value="{{ $client->ragioneSociale }}" />
            </div>
            <div class="form-group">
                <label for="partitaIva">Partita Iva</label>
                <input type="text" class="form-control" name="partitaIva" value="{{ $client->partitaIva }}" />
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="tel" class="form-control" name="telefono" value="{{ $client->telefono }}" />
            </div>
            <button type="submit" class="btn btn-block btn-outline-dark">Update</button>
        </form>
    </div>
    <form action="{{ route('images.store') }}" class="dropzone mx-auto mt-5" id="imageUpload">
        @csrf
    </form>
    <script>
        Dropzone.options.imageUpload = {
            paramName:"imageFile",
            maxFileSize : 1,
            acceptedFiles:'.jpeg,.jpg,.png,.gif'
        };
    </script>
</div>
@endsection
