<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMotherboardRequest;
use App\Http\Requests\UpdateMotherboardRequest;
use App\Http\Resources\MotherboardResource;
use App\Models\Motherboard;

class MotherboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MotherboardResource::Collection(Motherboard::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMotherboardRequest $request)
    {
       $data = $request->validated();
       $motherboard = Motherboard::create($data);
       return new MotherboardResource($motherboard);
    }

    /**
     * Display the specified resource.
     */
    public function show(Motherboard $motherboard)
    {
        $data = Motherboard::findOrFail($motherboard->id);
        return new MotherboardResource($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMotherboardRequest $request, Motherboard $motherboard)
    {
        $data = $request->validated();
        $motherboard->update($data);
        return new MotherboardResource($motherboard);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motherboard $motherboard)
    {
        return ($motherboard->delete())
        ? response()->json([
            'success' => true,
            'message' => 'Item deleted successfully.'
        ], 200)
        : abort(500, "Nem lehet törölni");
    }
}
