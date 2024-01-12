@extends('layouts.app')

@section('content')
    <p>{{ $race->name }} {{ $race->location }} - {{ $race->circuit_length }}</p>
@endsection
