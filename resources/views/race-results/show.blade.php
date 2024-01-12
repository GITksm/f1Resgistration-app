@extends('layouts.app')

@section('content')
    <p>{{ $raceResult->user->name }} {{ $raceResult->race->name }} - {{ $raceResult->laptime }}</p>
@endsection
