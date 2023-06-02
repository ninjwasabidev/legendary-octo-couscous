<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthData;

class HealthDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    // Fetch and return all health data for the authenticated user
        $healthData = auth()->user()->healthDatas;

        return view('health-data.index', compact('healthData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('health_data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'date' => 'required|date',
            'heart_rate' => 'required|integer',
            'blood_pressure_min' => 'required|integer',
            'blood_pressure_max' => 'required|integer',
        ]);

        $healthData = new HealthData([
            'date' => $request->date,
            'heart_rate' => $request->heart_rate,
            'blood_pressure_min' => $request->blood_pressure_min,
            'blood_pressure_max' => $request->blood_pressure_max,
        ]);

        $healthData = new HealthData($validatedData);
        auth()->user()->healthDatas()->save($healthData);

        return redirect()->back()->with('success', 'Health data saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
