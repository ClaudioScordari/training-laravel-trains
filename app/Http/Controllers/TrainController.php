<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Train;

class TrainController extends Controller
{
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
        //
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
