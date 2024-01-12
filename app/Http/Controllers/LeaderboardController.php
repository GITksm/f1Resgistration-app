<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\RaceResult;

public function upcomingRaceLeaderboard()

{
    $upcomingRace = Race::where('date', '>', now())->orderBy('date', 'asc')->first();
// Aannemend dat 'date' het veld is dat de datum van de race bevat
    if (!$upcomingRace) {
        return view('no_race'); // Een view die een bericht toont als er geen aankomende race is
    }
    $leaderboard = RaceResult::where('race_id', $upcomingRace->id)
        ->orderBy('laptime', 'asc') // Snelste tijd eerst
        ->with('user') // Laad gebruikersdata voor elk resultaat
        ->get();
    return view('leaderboard.upcoming', ['leaderboard' => $leaderboard, 'race' => $upcomingRace]);
}

//class LeaderboardController extends Controller
//{
//
//}
