<?php

namespace App\Http\Controllers;

use App\Models\registroCheckListOperativa;

use Carbon\Carbon;

use Illuminate\Http\Request;

class RegistroCheckListOperativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroCheckListOperativa = registroCheckListOperativa::all();
        return view('registroCheckListOperativa.index', compact('registroCheckListOperativa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroCheckListOperativa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroCheckListOperativa = new registroCheckListOperativa();

        $registroCheckListOperativa->clo_Eco = $request->input('clo_Eco');
        $registroCheckListOperativa->clo_Fecha = Carbon::parse($request->input('clo_Fecha'));
        $registroCheckListOperativa->clo_Horo = $request->input('clo_Horo');
        $registroCheckListOperativa->clo_Turno = $request->input('clo_Turno');

        $registroCheckListOperativa->clo_Verificar_foza = $request->input('clo_Verificar_foza', 'No');
        $registroCheckListOperativa->clo_Verificar_botones_stop = $request->input('clo_Verificar_botones_stop', 'No');
        $registroCheckListOperativa->clo_Micros_puerta_entrada = $request->input('clo_Micros_puerta_entrada', 'No');
        $registroCheckListOperativa->clo_Micros_puerta_salida = $request->input('clo_Micros_puerta_salida', 'No');
        $registroCheckListOperativa->clo_Micros_desembarque = $request->input('clo_Micros_desembarque', 'No');
        $registroCheckListOperativa->clo_Verificar_telefonica = $request->input('clo_Verificar_telefonica', 'No');
        $registroCheckListOperativa->clo_Comprobar_aire = $request->input('clo_Comprobar_aire', 'No');
        $registroCheckListOperativa->clo_Comprobar_intercierres = $request->input('clo_Comprobar_intercierres', 'No');
        $registroCheckListOperativa->clo_Verificar_palanca = $request->input('clo_Verificar_palanca', 'No');
        $registroCheckListOperativa->clo_Verificar_puertas = $request->input('clo_Verificar_puertas', 'No');
        $registroCheckListOperativa->clo_Verificar_guias = $request->input('clo_Verificar_guias', 'No');
        $registroCheckListOperativa->clo_Verificar_interruptores = $request->input('clo_Verificar_interruptores', 'No');
        $registroCheckListOperativa->clo_Verificar_orden = $request->input('clo_Verificar_orden', 'No');
        $registroCheckListOperativa->clo_Verificar_grado = $request->input('clo_Verificar_grado', 'No');

        $registroCheckListOperativa->clo_Elevador = $request->input('clo_Elevador', 'No');
        $registroCheckListOperativa->clo_Recorrido = $request->input('clo_Recorrido', 'No');

        if ($request->input('SeleccionadosOperativaSi') == '') {
            $registroCheckListOperativa->SeleccionadosOperativaSi = "16";
        } else {
            $registroCheckListOperativa->SeleccionadosOperativaSi = $request->input('SeleccionadosOperativaSi');
        }

        if ($request->input('SeleccionadosOperativaNo') == '') {
            $registroCheckListOperativa->SeleccionadosOperativaNo = "0";
        } else {
            $registroCheckListOperativa->SeleccionadosOperativaNo = $request->input('SeleccionadosOperativaNo');
        }

        $registroCheckListOperativa->clo_Observaciones = $request->input('clo_Observaciones');
        $registroCheckListOperativa->clo_Elaboro = $request->input('clo_Elaboro');
        $registroCheckListOperativa->clo_Verifico = $request->input('clo_Verifico');
        $registroCheckListOperativa->clo_Entrego = $request->input('clo_Entrego');
        $registroCheckListOperativa->clo_Recibe = $request->input('clo_Recibe');

        $registroCheckListOperativa->save();


        return redirect('checkListOperativa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroCheckListOperativa  $registroCheckListOperativa
     * @return \Illuminate\Http\Response
     */
    public function show(registroCheckListOperativa $registroCheckListOperativa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroCheckListOperativa  $registroCheckListOperativa
     * @return \Illuminate\Http\Response
     */
    public function edit(registroCheckListOperativa $registroCheckListOperativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroCheckListOperativa  $registroCheckListOperativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroCheckListOperativa $registroCheckListOperativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroCheckListOperativa  $registroCheckListOperativa
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroCheckListOperativa $registroCheckListOperativa)
    {
        //
    }
}
