<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use App\Http\Requests\StoreMotorcycleRequest;
use App\Http\Requests\UpdateMotorcycleRequest;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMotorcycleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMotorcycleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function show(Motorcycle $motorcycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Motorcycle $motorcycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMotorcycleRequest  $request
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMotorcycleRequest $request, Motorcycle $motorcycle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motorcycle $motorcycle)
    {
        //
    }
}
