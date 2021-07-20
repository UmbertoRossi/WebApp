@extends('layout')
@section('content')
    <style>
        .push-top {
            margin-top: 50px;
        }
    </style>
    <a class="btn btn-outline-dark position-relative" style="margin-left:auto" href="orders/create">Crea nuovo ordine</a>
    <div class="push-top">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
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
                                    ID Impiegato
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID Cliente
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID Progetto
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Titolo
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Data
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ora
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Descrizione
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($order as $orders)
                            @foreach ($users as $user)
                            @foreach ($clients as $client)
                            @foreach ($projects as $project)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap" >{{$orders->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$orders->user_id}} {{$user->nome}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$orders->client_id}} {{$client->ragioneSociale}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$orders->project_id}} {{$project->nome}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$orders->titolo}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$orders->data}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$orders->ora}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$orders->descrizione}}</td>
                                <td class="text-center">
                                <a href="{{ route('orders.edit', $orders->id)}}" class="btn btn-outline-dark btn-sm">Edit</a>
                                <form action="{{ route('orders.destroy', $orders->id)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection