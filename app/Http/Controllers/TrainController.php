<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Train;

class TrainController extends Controller
{
    // validazione backend
    private $validatedRules = [
        'company' => 'required|max:64',
        'departure_station' => 'required|max:64',
        'arrival_station' => 'required|max:64',
        'departure_time' => 'required',
        'arrival_time' => 'required',
        'code' => 'required|max:7|unique:App\Models\Train,code',
        'num_carriages' => 'nullable|min:1|max:9|numeric',
        'in_time' => 'required|boolean',
        'deleted' => 'required|boolean',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trains = Train::all();

        return view('trains.index', compact('trains'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trains.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->validatedRules);

        $train_datas = $request->all();

        $train = Train::create($train_datas);

        return redirect()->route('trains.show', $train->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        return view('trains.show', compact('train')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Train $train)
    {
        return view('trains.edit', compact('train'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Train $train)
    {
        $request->validate($this->validatedRules);

        $editedDatas = $request->all();

        // aggiorno
        $train->update($editedDatas);

        return redirect()->route('trains.show', $train->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Train $train)
    {
        $train->delete();

        return redirect()->route('trains.index');
    }
}
