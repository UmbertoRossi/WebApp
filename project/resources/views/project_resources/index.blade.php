@extends('layout')
@section('content')
<style>
    .push-top {
        margin-top: 50px;
    }
</style>
<a class="btn btn-outline-dark position-relative" style="margin-left:auto" href="projects/create">Crea nuovo progetto</a>
<div class="push-top">
    @if (session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <!-- This example requires Tailwind CSS v2.0+ -->
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
                                <th scope="col" class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nome Progetto
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($project as $projects)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $projects->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $projects->nome }}</td>
                                <td class="text-center">
                                <a href="{{ route('projects.edit', $projects->id) }}" class="btn btn-outline-dark btn-sm">Edit</a>
                                <form action="{{ route('projects.destroy', $projects->id) }}" method="post" style="display: inline-block">
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

