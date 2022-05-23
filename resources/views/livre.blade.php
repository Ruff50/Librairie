@extends('layouts/app')


@section('main')

<h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">{{$livre->titre}}</h1>
<p class="mb-28">
    {{$livre->extrait}}
</p>
@endsection