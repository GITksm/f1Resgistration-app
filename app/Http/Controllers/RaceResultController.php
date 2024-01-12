<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Race;
use App\Models\RaceResult;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRaceResultRequest;
use App\Http\Requests\UpdateRaceResultRequest;


class RaceResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $races = Race::all();
        $RaceResult = RaceResult::all();
        return view('race-results.index', compact('RaceResult', 'users', 'races'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $races = Race::all();
        return view('race-results.create', compact('users', 'races'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRaceResultRequest $request)
    {

        $request->validate([
            'user_id' => 'required',
            'race_id' => 'required',
            'laptime' => 'required',
        ]);
        RaceResult::create($request->all());
        return redirect()->route('race-results.index')
            ->with('success', 'raceResult created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(RaceResult $raceResult)
    {
        return view('race-results.create', compact('raceResult'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RaceResult $raceResult)
    {
        $users = User::all();
        $races = Race::all();
        return view('race-results.create', compact('races', 'users','raceResult'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRaceResultRequest $request, RaceResult $raceResult)
    {
        $request->validate([
            'user_id' => 'required',
            'race_id' => 'required',
            'laptime' => 'required',
        ]);
        $raceResult->update($request->all());
        return redirect()->route('race-results.index')
            ->with('success', 'raceResult updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RaceResult  $raceResult)
    {
        $raceResult->delete();
        return redirect()->route('race-results.index')
            ->with('success', 'raceresult deleted successfully.');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
