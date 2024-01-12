@extends('layouts.app')

@section('content')

    <form action="{{ route('race-results.store') }}" method="POST">

        @csrf
        <label>User:</label>
        <select name="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <label>Race:</label>
        <select name="race_id">
            @foreach ($races as $race)
                <option value="{{ $race->id }}">{{ $race->name }}</option>
            @endforeach
        </select>
        <label>Laptime:</label>
        <input type="time" name="laptime" step="1">  <!-- 'step' zorgt ervoor dat seconden
kunnen worden ingevoerd -->
        <button type="submit">Submit</button>
    </form>
@endsection
