<?php

namespace App\Http\Controllers;

use App\Models\registroCartaCientoVeinteHoras;
use App\Models\horometroCientoVeinteHoras;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RegistroCartaCientoVeinteHorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horometroCientoVeinteHoras = horometroCientoVeinteHoras::all();
        // $registroCartaCientoVeinteHoras = registroCartaCientoVeinteHoras::all();
        $registroCartaCientoVeinteHoras = registroCartaCientoVeinteHoras::orderBy('cientoVeinte_Fecha', 'desc')->get();

        return view('registroCartaCientoVeinteHoras.index', compact('horometroCientoVeinteHoras', 'registroCartaCientoVeinteHoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroCartaCientoVeinteHoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroCartaCientoVeinteHoras = new registroCartaCientoVeinteHoras();

        $registroCartaCientoVeinteHoras->cientoVeinte_Equipo = $request->input('cientoVeinte_Equipo');
        $registroCartaCientoVeinteHoras->cientoVeinte_Equipo = $request->input('cientoVeinte_Equipo');
        $registroCartaCientoVeinteHoras->cientoVeinte_NumE = $request->input('cientoVeinte_NumE');
        $registroCartaCientoVeinteHoras->cientoVeinte_Fecha = Carbon::parse($request->input('cientoVeinte_Fecha'));

        $registroCartaCientoVeinteHoras->cientoVeinte_Tipo = $request->input('cientoVeinte_Tipo');
        $registroCartaCientoVeinteHoras->cientoVeinte_Horo = $request->input('cientoVeinte_Horo');
        $registroCartaCientoVeinteHoras->cientoVeinte_Horario = $request->input('cientoVeinte_Horario');
        $registroCartaCientoVeinteHoras->cientoVeinte_Turno = $request->input('cientoVeinte_Turno');

        $registroCartaCientoVeinteHoras->cientoVeinte_1_1 = $request->input('cientoVeinte_1_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_2_1 = $request->input('cientoVeinte_2_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_3_1 = $request->input('cientoVeinte_3_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_3_2 = $request->input('cientoVeinte_3_2', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_3_3 = $request->input('cientoVeinte_3_3', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_3_4 = $request->input('cientoVeinte_3_4', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_4_1 = $request->input('cientoVeinte_4_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_5_1 = $request->input('cientoVeinte_5_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_5_2 = $request->input('cientoVeinte_5_2', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_5_3 = $request->input('cientoVeinte_5_3', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_5_4 = $request->input('cientoVeinte_5_4', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_5_5 = $request->input('cientoVeinte_5_5', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_6_1 = $request->input('cientoVeinte_6_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_7_1 = $request->input('cientoVeinte_7_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_8_1 = $request->input('cientoVeinte_8_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_9_1 = $request->input('cientoVeinte_9_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_10_1 = $request->input('cientoVeinte_10_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_11_1 = $request->input('cientoVeinte_11_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_12_1 = $request->input('cientoVeinte_12_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_13_1 = $request->input('cientoVeinte_13_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_14_1 = $request->input('cientoVeinte_14_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_15_1 = $request->input('cientoVeinte_15_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_16_1 = $request->input('cientoVeinte_16_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_16_2 = $request->input('cientoVeinte_16_2', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_16_3 = $request->input('cientoVeinte_16_3', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_16_4 = $request->input('cientoVeinte_16_4', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_17_1 = $request->input('cientoVeinte_17_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_17_2 = $request->input('cientoVeinte_17_2', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_18_1 = $request->input('cientoVeinte_18_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_19_1 = $request->input('cientoVeinte_19_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_20_1 = $request->input('cientoVeinte_20_1', 'No');
        $registroCartaCientoVeinteHoras->cientoVeinte_20_2 = $request->input('cientoVeinte_20_2', 'No');

        $registroCartaCientoVeinteHoras->cientoVeinteObservacionesForm = $request->input('cientoVeinteObservacionesForm');
        $registroCartaCientoVeinteHoras->cientoVeinteOperadorForm = $request->input('cientoVeinteOperadorForm');
        $registroCartaCientoVeinteHoras->cientoVeinteVerificadorForm = $request->input('cientoVeinteVerificadorForm');
        $registroCartaCientoVeinteHoras->cientoVeinteEncargadoForm = $request->input('cientoVeinteEncargadoForm');

        $registroCartaCientoVeinteHoras->save();

        DB::table('horometro_ciento_veinte_horas')->delete();

        return redirect('cartaCientoVeinteHoras');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroCartaCientoVeinteHoras  $registroCartaCientoVeinteHoras
     * @return \Illuminate\Http\Response
     */
    public function show(registroCartaCientoVeinteHoras $registroCartaCientoVeinteHoras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroCartaCientoVeinteHoras  $registroCartaCientoVeinteHoras
     * @return \Illuminate\Http\Response
     */
    public function edit(registroCartaCientoVeinteHoras $registroCartaCientoVeinteHoras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroCartaCientoVeinteHoras  $registroCartaCientoVeinteHoras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroCartaCientoVeinteHoras $registroCartaCientoVeinteHoras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroCartaCientoVeinteHoras  $registroCartaCientoVeinteHoras
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroCartaCientoVeinteHoras $registroCartaCientoVeinteHoras)
    {
        //
    }
}
