{{-- @extends('layout')
@section('content')
@php
    $flag=0;
    foreach ($images as $image) {
        $file_path = $image_path . '\\' . $image->imageName;
        $imagesFilePath=[$flag=>$file_path];
        $flag = $flag + 1;
    }
@endphp
<img src="{{$imagesFilePath[0]}}" alt="">
@endsection --}}
@extends('layout')
@section('content')
<style>
    .push-top {
        margin-top: 50px;
    }
</style>
<div class="push-top">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID immagine
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Immagine
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nome immagine
                                </th>
                                <th scope="col"
                                    class="px-18 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID cliente
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200"action = "{{route('clients.show')}}">
                            @foreach ($images as $image)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{$image->imageId}}</td>
                            </tr>
                            @endforeach 
                            @foreach ($client as $clients)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{$clients->id}}</td>
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
