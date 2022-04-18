<?php

namespace App\Http\Controllers;

use App\Models\registroCartaCuarentaHoras;
use App\Models\horometroCuarentaHoras;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use Illuminate\Http\Request;

class RegistroCartaCuarentaHorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horometroCuarentaHoras = horometroCuarentaHoras::all();
        $registroCartaCuarentaHoras = registroCartaCuarentaHoras::orderBy('cuarenta_Fecha', 'desc')->get();

        return view('registroCartaCuarentaHoras.index', compact('horometroCuarentaHoras', 'registroCartaCuarentaHoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroCartaCuarentaHoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroCartaCuarentaHoras = new registroCartaCuarentaHoras();

        $registroCartaCuarentaHoras->cuarenta_Equipo = $request->input('cuarenta_Equipo');
        $registroCartaCuarentaHoras->cuarenta_Marca = $request->input('cuarenta_Marca');
        $registroCartaCuarentaHoras->cuarenta_NumE = $request->input('cuarenta_NumE');
        $registroCartaCuarentaHoras->cuarenta_Fecha = Carbon::parse($request->input('cuarenta_Fecha'));

        $registroCartaCuarentaHoras->cuarenta_Tipo = $request->input('cuarenta_Tipo');
        $registroCartaCuarentaHoras->cuarenta_Horo = $request->input('cuarenta_Horo');
        $registroCartaCuarentaHoras->cuarenta_Horario = $request->input('cuarenta_Horario');
        $registroCartaCuarentaHoras->cuarenta_Turno = $request->input('cuarenta_Turno');


        $registroCartaCuarentaHoras->cuarenta_1_1 = $request->input('cuarenta_1_1', 'No');
        $registroCartaCuarentaHoras->cuarenta_1_2 = $request->input('cuarenta_1_2', 'No');
        $registroCartaCuarentaHoras->cuarenta_1_3 = $request->input('cuarenta_1_3', 'No');

        $registroCartaCuarentaHoras->cuarenta_2_0 = $request->input('cuarenta_2_0', 'No');
        $registroCartaCuarentaHoras->cuarenta_2_1 = $request->input('cuarenta_2_1', 'No');
        $registroCartaCuarentaHoras->cuarenta_2_2 = $request->input('cuarenta_2_2', 'No');
        $registroCartaCuarentaHoras->cuarenta_2_3 = $request->input('cuarenta_2_3', 'No');

        $registroCartaCuarentaHoras->cuarenta_3_1 = $request->input('cuarenta_3_1', 'No');

        $registroCartaCuarentaHoras->cuarenta_4_1 = $request->input('cuarenta_4_1', 'No');
        $registroCartaCuarentaHoras->cuarenta_4_2 = $request->input('cuarenta_4_2', 'No');

        $registroCartaCuarentaHoras->cuarenta_5_1 = $request->input('cuarenta_5_1', 'No');

        $registroCartaCuarentaHoras->cuarenta_6_1 = $request->input('cuarenta_6_1', 'No');

        $registroCartaCuarentaHoras->cuarenta_7_1 = $request->input('cuarenta_7_1', 'No');
        $registroCartaCuarentaHoras->cuarenta_7_2 = $request->input('cuarenta_7_2', 'No');

        $registroCartaCuarentaHoras->cuarenta_8_1 = $request->input('cuarenta_8_1', 'No');

        $registroCartaCuarentaHoras->cuarenta_9_1 = $request->input('cuarenta_9_1', 'No');

        $registroCartaCuarentaHoras->cuarenta_10_1 = $request->input('cuarenta_10_1', 'No');
        $registroCartaCuarentaHoras->cuarenta_10_2 = $request->input('cuarenta_10_2', 'No');

        $registroCartaCuarentaHoras->cuarenta_11_1 = $request->input('cuarenta_11_1', 'No');
        $registroCartaCuarentaHoras->cuarenta_11_2 = $request->input('cuarenta_11_2', 'No');
        $registroCartaCuarentaHoras->cuarenta_11_3 = $request->input('cuarenta_11_3', 'No');
        $registroCartaCuarentaHoras->cuarenta_11_4 = $request->input('cuarenta_11_4', 'No');
        $registroCartaCuarentaHoras->cuarenta_11_5 = $request->input('cuarenta_11_5', 'No');
        $registroCartaCuarentaHoras->cuarenta_11_6 = $request->input('cuarenta_11_6', 'No');

        $registroCartaCuarentaHoras->cuarenta_12_1 = $request->input('cuarenta_12_1', 'No');

        $registroCartaCuarentaHoras->cuarenta_13_1 = $request->input('cuarenta_13_1', 'No');

        $registroCartaCuarentaHoras->observaciones_Form = $request->input('observaciones_Form');
        $registroCartaCuarentaHoras->cuarentaOperadorForm = $request->input('cuarentaOperadorForm');
        $registroCartaCuarentaHoras->cuarentaVerificadorForm = $request->input('cuarentaVerificadorForm');
        $registroCartaCuarentaHoras->cuarentaEncargadoForm = $request->input('cuarentaEncargadoForm');

        $registroCartaCuarentaHoras->save();

        // $categorias = horometroCuarentaHoras::sum('totalHorometro');

        DB::table('horometro_cuarenta_horas')->delete();

        return redirect('cartaCuarentaHoras');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroCartaCuarentaHoras  $registroCartaCuarentaHoras
     * @return \Illuminate\Http\Response
     */
    public function show(registroCartaCuarentaHoras $registroCartaCuarentaHoras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroCartaCuarentaHoras  $registroCartaCuarentaHoras
     * @return \Illuminate\Http\Response
     */
    public function edit(registroCartaCuarentaHoras $registroCartaCuarentaHoras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroCartaCuarentaHoras  $registroCartaCuarentaHoras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroCartaCuarentaHoras $registroCartaCuarentaHoras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroCartaCuarentaHoras  $registroCartaCuarentaHoras
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroCartaCuarentaHoras $registroCartaCuarentaHoras)
    {
        //
    }
}
