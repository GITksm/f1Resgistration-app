@extends('layouts.app')

@section('content')
    @foreach ($races as $race)
        <div class="container d-flex align-items-center flex-wrap justify-content-around">
            <div class="border border-black flex- d-flex w-25">
                <div class="flex-container">
                <h2>{{ $race->name }} {{ $race->location }}</h2><br> {{ $race->circuit_length}}
                </div>

            </div>
        </div>
        <br>
    @endforeach
@endsection
