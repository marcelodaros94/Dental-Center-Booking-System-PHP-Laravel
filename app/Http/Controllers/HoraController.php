<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use App\Http\Requests\StoreHoraRequest;
use App\Http\Requests\UpdateHoraRequest;

class HoraController extends Controller
{
    public function getHoras(){
        $horas=Hora::all();
        return $horas;
    }
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
     * @param  \App\Http\Requests\StoreHoraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHoraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hora  $hora
     * @return \Illuminate\Http\Response
     */
    public function show(Hora $hora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hora  $hora
     * @return \Illuminate\Http\Response
     */
    public function edit(Hora $hora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHoraRequest  $request
     * @param  \App\Models\Hora  $hora
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHoraRequest $request, Hora $hora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hora  $hora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hora $hora)
    {
        //
    }
}
