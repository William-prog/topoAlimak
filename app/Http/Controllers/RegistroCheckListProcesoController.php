<?php

namespace App\Http\Controllers;

use App\Models\registroCheckListProceso;

use Carbon\Carbon;

use Illuminate\Http\Request;

class RegistroCheckListProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroCheckListProceso = registroCheckListProceso::all();
        return view('registroCheckListProceso.index', compact('registroCheckListProceso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroCheckListProceso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroCheckListProceso = new registroCheckListProceso();

        $registroCheckListProceso->clp_Eco = $request->input('clp_Eco');
        $registroCheckListProceso->clp_Fecha = Carbon::parse($request->input('clp_Fecha'));
        $registroCheckListProceso->clp_Horo = $request->input('clp_Horo');
        $registroCheckListProceso->clp_Turno = $request->input('clp_Turno');

        $registroCheckListProceso->clp_1 = $request->input('clp_1', 'No');
        $registroCheckListProceso->clp_2 = $request->input('clp_2', 'No');
        $registroCheckListProceso->clp_3 = $request->input('clp_3', 'No');
        $registroCheckListProceso->clp_4 = $request->input('clp_4', 'No');
        $registroCheckListProceso->clp_5 = $request->input('clp_5', 'No');
        $registroCheckListProceso->clp_6 = $request->input('clp_6', 'No');
        $registroCheckListProceso->clp_7 = $request->input('clp_7', 'No');
        $registroCheckListProceso->clp_8 = $request->input('clp_8', 'No');
        $registroCheckListProceso->clp_9 = $request->input('clp_9', 'No');
        $registroCheckListProceso->clp_10 = $request->input('clp_10', 'No');
        $registroCheckListProceso->clp_11 = $request->input('clp_11', 'No');
        $registroCheckListProceso->clp_12 = $request->input('clp_12', 'No');
        $registroCheckListProceso->clp_13 = $request->input('clp_13', 'No');
        $registroCheckListProceso->clp_14 = $request->input('clp_14', 'No');
        $registroCheckListProceso->clp_15 = $request->input('clp_15', 'No');
        $registroCheckListProceso->clp_16 = $request->input('clp_16', 'No');
        $registroCheckListProceso->clp_17 = $request->input('clp_17', 'No');
        $registroCheckListProceso->clp_18 = $request->input('clp_18', 'No');
        $registroCheckListProceso->clp_19 = $request->input('clp_19', 'No');
        $registroCheckListProceso->clp_20 = $request->input('clp_20', 'No');

        if ($request->input('SeleccionadosProcesoSi') == '') {
            $registroCheckListProceso->SeleccionadosProcesoSi = "20";
        } else {
            $registroCheckListProceso->SeleccionadosProcesoSi = $request->input('SeleccionadosProcesoSi');
        }

        if ($request->input('SeleccionadosProcesoNo') == '') {
            $registroCheckListProceso->SeleccionadosProcesoNo = "0";
        } else {
            $registroCheckListProceso->SeleccionadosProcesoNo = $request->input('SeleccionadosProcesoNo');
        }


        $registroCheckListProceso->clp_Observaciones = $request->input('clp_Observaciones');
        $registroCheckListProceso->clp_Supervisor = $request->input('clp_Supervisor');
        $registroCheckListProceso->clp_Encargado = $request->input('clp_Encargado');
        $registroCheckListProceso->clp_Operador = $request->input('clp_Operador');

        $registroCheckListProceso->save();

        return redirect('checkListProceso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroCheckListProceso  $registroCheckListProceso
     * @return \Illuminate\Http\Response
     */
    public function show(registroCheckListProceso $registroCheckListProceso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroCheckListProceso  $registroCheckListProceso
     * @return \Illuminate\Http\Response
     */
    public function edit(registroCheckListProceso $registroCheckListProceso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroCheckListProceso  $registroCheckListProceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroCheckListProceso $registroCheckListProceso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroCheckListProceso  $registroCheckListProceso
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroCheckListProceso $registroCheckListProceso)
    {
        //
    }
}
