<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = servicio::all();
        return Inertia::render('Servicio/Index',[
            'servicios' => $result,
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servicio $servicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(servicio $servicio)
    {
        //
    }
}
