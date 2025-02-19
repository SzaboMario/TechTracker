<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCpuRequest;
use App\Http\Requests\UpdateCpuRequest;
use App\Http\Resources\CpuResource;
use App\Models\Cpu;

class CpuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CpuResource::Collection(Cpu::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCpuRequest $request)
    {
        $data = $request->validated();
        $cpu = Cpu::create($data);
        return new CpuResource($cpu);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cpu $cpu)
    {
        return new CpuResource($cpu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCpuRequest $request, Cpu $cpu)
    {
        $data = $request->validated();
        $cpu->update($data);
        return new CpuResource($cpu);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cpu $cpu)
    {
        return ($cpu->delete())
        ?response()->json([
            "success"=>true,
            "message"=>"delete ok"
        ], 200)
        : response()->json([
            "success" => false,
            "message" =>"cannot delete: ".$cpu->id
        ], 500);
    }
}
