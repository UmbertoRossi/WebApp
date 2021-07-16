@extends('layout')
@section('content')
<style>
    .push-top {
        margin-top: 50px;
    }

</style>
<a class="btn btn-outline-dark position-relative" style="margin-left:auto" href="users/create">Crea nuovo utente</a>
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
                                    Nome
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Cognome
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Password
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Mansione
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($user as $users)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{$users->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$users->nome}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$users->cognome}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$users->password}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$users->email}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$users->mansione}}</td>
                                <td class="text-center">
                                <a href="{{ route('orders.edit', $users->id)}}" class="btn btn-outline-dark btn-sm">Edit</a>
                                <form action="{{ route('orders.destroy', $users->id)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
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
