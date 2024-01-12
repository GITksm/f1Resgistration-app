@extends('layouts.app')

@section('content')
    <form action="{{ route('races.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{$race->name}}">
        <label>Location:</label>
        <input type="text" name="location" value="{{$race->location}}">
        <label>Length of Circuit (in km):</label>
        <input type="text" name="length_circuit" value="{{$race->length_circuit}}">
        <button type="submit">Create</button>
    </form>
@endsection
