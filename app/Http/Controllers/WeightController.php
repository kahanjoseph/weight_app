<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
class WeightController extends Controller
{
    /**
     * Display a listing of the weight entries.
     */
    public function index()
    {
        //$weights = Weight::all();
        return Inertia::render('Dashboard', ['weights' => DB::table('weight_table')->paginate(10)]);
    }

    /**
     * Show the form for creating a new weight entry.
     */
    public function create()
    {
        return view('weights.create');
    }

    /**
     * Store a newly created weight entry in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'weight' => 'required|numeric',
            'date' => 'required|date',
            'remarks' => 'nullable|string'
        ]);

        $weight = Weight::create($request->all());

        return to_route('home');
    }

    /**
     * Display the specified weight entry.
     */
    public function show(Weight $weight)
    {
        return view('weights.show', compact('weight'));
    }

    /**
     * Show the form for editing the specified weight entry.
     */
    public function edit(Weight $weight)
    {
        return view('weights.edit', compact('weight'));
    }

    /**
     * Update the specified weight entry in the database.
     */
    public function update(Request $request, Weight $weight)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'weight' => 'required|numeric',
            'date' => 'required|date',
            'remarks' => 'nullable|string'
        ]);

        $weight->update($request->all());

        return redirect()->route('weights.index')->with('success', 'Weight entry updated successfully.');
    }

    /**
     * Remove the specified weight entry from the database.
     */
    public function destroy(Weight $weight)
    {
        $weight->delete();

        return redirect()->route('weights.index')->with('success', 'Weight entry deleted successfully.');
    }
}
