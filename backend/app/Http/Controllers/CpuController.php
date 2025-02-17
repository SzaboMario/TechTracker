<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCpuRequest;
use App\Http\Requests\UpdateCpuRequest;
use App\Models\Cpu;

class CpuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCpuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cpu $cpu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCpuRequest $request, Cpu $cpu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cpu $cpu)
    {
        //
    }
}
