<?php

namespace App\Http\Controllers;

use App\Models\registroCartaDosMilHoras;
use App\Models\horometroDosMilHoras;

use Illuminate\Http\Request;

class RegistroCartaDosMilHorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horometroDosMilHoras = horometroDosMilHoras::all();
        $registroCartaDosMilHoras = registroCartaDosMilHoras::all();

        return view('cartaCartaDosMilHoras.index', compact('horometroDosMilHoras', 'registroCartaDosMilHoras'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cartaCartaDosMilHoras.create');
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
     * @param  \App\Models\registroCartaDosMilHoras  $registroCartaDosMilHoras
     * @return \Illuminate\Http\Response
     */
    public function show(registroCartaDosMilHoras $registroCartaDosMilHoras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroCartaDosMilHoras  $registroCartaDosMilHoras
     * @return \Illuminate\Http\Response
     */
    public function edit(registroCartaDosMilHoras $registroCartaDosMilHoras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroCartaDosMilHoras  $registroCartaDosMilHoras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroCartaDosMilHoras $registroCartaDosMilHoras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroCartaDosMilHoras  $registroCartaDosMilHoras
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroCartaDosMilHoras $registroCartaDosMilHoras)
    {
        //
    }
}
