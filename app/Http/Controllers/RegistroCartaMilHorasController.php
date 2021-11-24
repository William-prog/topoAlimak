<?php

namespace App\Http\Controllers;

use App\Models\registroCartaMilHoras;
use App\Models\horometroMilHoras;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $registroCartaMilHoras = new registroCartaMilHoras();

        $registroCartaMilHoras->mil_Equipo = $request->input('mil_Equipo');
        $registroCartaMilHoras->mil_Marca = $request->input('mil_Marca');
        $registroCartaMilHoras->mil_NumE = $request->input('mil_NumE');
        $registroCartaMilHoras->mil_Fecha = Carbon::parse($request->input('mil_Fecha'));

        $registroCartaMilHoras->mil_Tipo = $request->input('mil_Tipo');
        $registroCartaMilHoras->mil_Horo = $request->input('mil_Horo');
        $registroCartaMilHoras->mil_Horario = $request->input('mil_Horario');
        $registroCartaMilHoras->mil_Turno = $request->input('mil_Turno');


        $registroCartaMilHoras->mil_1_1 = $request->input('mil_1_1', 'No');
        $registroCartaMilHoras->mil_1_2 = $request->input('mil_1_2', 'No');
        $registroCartaMilHoras->mil_1_3 = $request->input('mil_1_3', 'No');

        $registroCartaMilHoras->mil_2_0 = $request->input('mil_2_0', 'No');

        $registroCartaMilHoras->mil_3_1 = $request->input('mil_3_1', 'No');

        $registroCartaMilHoras->mil_4_1 = $request->input('mil_4_1', 'No');

        $registroCartaMilHoras->mil_5_1 = $request->input('mil_5_1', 'No');

        $registroCartaMilHoras->mil_6_1 = $request->input('mil_6_1', 'No');

        $registroCartaMilHoras->mil_7_1 = $request->input('mil_7_1', 'No');

        $registroCartaMilHoras->mil_8_1 = $request->input('mil_8_1', 'No');
        $registroCartaMilHoras->mil_8_2 = $request->input('mil_8_2', 'No');
        $registroCartaMilHoras->mil_8_3 = $request->input('mil_8_3', 'No');

        $registroCartaMilHoras->mil_9_1 = $request->input('mil_9_1', 'No');

        $registroCartaMilHoras->mil_10_1 = $request->input('mil_10_1', 'No');

        $registroCartaMilHoras->observaciones_Form = $request->input('observaciones_Form');
        $registroCartaMilHoras->milOperadorForm = $request->input('milOperadorForm');
        $registroCartaMilHoras->milVerificadorForm = $request->input('milVerificadorForm');
        $registroCartaMilHoras->milEncargadoForm = $request->input('milEncargadoForm');

        $registroCartaMilHoras->save();

        DB::table('horometro_mil_horas')->delete();

        return redirect('cartaCartaMilHoras');
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
