<?php

namespace App\Http\Controllers;

use App\Models\registroCartaMilHoras;
use App\Models\horometroMilHoras;

use Illuminate\Http\Request;

class RegistroCartaMilHorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horometroMilHoras = horometroMilHoras::all();
        $registroCartaMilHoras = registroCartaMilHoras::all();

        return view('registroCartaMilHoras.index', compact('horometroMilHoras', 'registroCartaMilHoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroCartaMilHoras.create');
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
     * @param  \App\Models\registroCartaMilHoras  $registroCartaMilHoras
     * @return \Illuminate\Http\Response
     */
    public function show(registroCartaMilHoras $registroCartaMilHoras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroCartaMilHoras  $registroCartaMilHoras
     * @return \Illuminate\Http\Response
     */
    public function edit(registroCartaMilHoras $registroCartaMilHoras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroCartaMilHoras  $registroCartaMilHoras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroCartaMilHoras $registroCartaMilHoras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroCartaMilHoras  $registroCartaMilHoras
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroCartaMilHoras $registroCartaMilHoras)
    {
        //
    }
}
