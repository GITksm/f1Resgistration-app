@extends('layouts.app')

@section('content')
    @foreach ($profiles as $profile)
        <div class="container d-flex align-items-center flex-wrap justify-content-around">
            <div class="border border-black flex- d-flex w-25">
                <div class="flex-flow: column-reverse wrap;">
                <h2>{{ $profile->firstname }} {{ $profile->lastname }}</h2><br> {{ $profile->mobile }}
                </div>

            </div>
        </div>
        <br>
    @endforeach
@endsection
