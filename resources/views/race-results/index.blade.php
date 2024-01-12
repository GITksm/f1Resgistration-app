@extends('layouts.app')

@section('content')
    @foreach ($raceResults as $raceResult)
        <div class="container d-flex align-items-center flex-wrap justify-content-around">
            <div class="border border-black flex- d-flex w-25">
                <div class=" flex-flow: column wrap;">
                <h2>{{ $raceResult->user->name }} {{ $raceResult->race->name }}</h2><br> {{ $raceResult->laptime }}
                </div>

            </div>
        </div>
        <br>
    @endforeach
@endsection
