@extends('layout')
@section('content')
<style>
    .push-top {
        margin-top: 50px;
    }
</style>
<a class="btn btn-outline-dark" href="clients/create">Crea nuovo cliente</a>
<div class="push-top">
    @if(session()->get('completed'))
    <div class="alert alert-success">
        {{ session()->get('completed') }}
    </div><br>
    @endif
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ragione Sociale
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Partita IVA
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Telefono
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Immagini
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($client as $clients)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $clients->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $clients->ragioneSociale }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$clients->partitaIva}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$clients->telefono}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$clients->returnImage()}}</td>
                                <td class="text-center">
                                    <a href="{{ route('clients.edit', $clients->id) }}" class="btn btn-outline-dark btn-sm">Edit</a>
                                    <form action="{{ route('clients.destroy', $clients->id) }}" method="post"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" type=" submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
