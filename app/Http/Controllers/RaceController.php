<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRaceRequest;
use App\Http\Requests\UpdateRaceRequest;
use App\Models\Race;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $races = Race::all();
        return view('races.index', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('races.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRaceRequest $request)
        {
            $request->validate([
                'name' => 'required',
                'location' => 'required',
                'length_circuit' => 'required',
            ]);

            Race::create($request->all());
            return redirect()->route('races.index')
                ->with('success', 'race created successfully.');
        }


        /**
         * Display the specified resource.
         */
        public function show(Race $race)
        {
            return view('races.show', compact('race'));
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Race $race)
        {
            return view('races.edit', compact('race'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(UpdateRaceRequest $request, Race $race)
        {
            $request->validate([
                'name' => 'required',
                'location' => 'required',
                'length_circuit' => 'required',
            ]);
            $race->update($request->all());
            return redirect()->route('races.index')
                ->with('success', 'race updated successfully.');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Race $race)
        {
            $race->delete();
            return redirect()->route('races.index')
                ->with('success', 'race deleted successfully.');
        }
}
