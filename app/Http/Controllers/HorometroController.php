<?php

namespace App\Http\Controllers;

use App\Models\horometro;

use App\Models\horometroCuarentaHoras;
use App\Models\horometroCientoVeinteHoras;
use App\Models\horometroMilHoras;
use App\Models\horometroDosMilHoras;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HorometroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroHorometro = horometro::all();
        return view('horometros.index', compact('registroHorometro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosHorometro = horometro::orderBy('id', 'desc')->take(3)->get();
        return view('registroHorometro.create', compact('datosHorometro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // HISTORIAL PARA LOS HOROMETROS
        $horometro = new horometro();
        $horometro->fechaHorometro = Carbon::parse($request->fechaHorometro);
        $horometro->turnoHorometro = $request->turnoHorometro;
        $horometro->inicialHorometro = $request->inicialHorometro;
        $horometro->finalHorometro = $request->finalHorometro;
        $horometro->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro , 2);
        $horometro->save();

        // HOROMETROS PARA EL MANTENIMIENTO DE CUARENTA HORAS
        $horometroCuarentaHoras = new horometroCuarentaHoras();
        $horometroCuarentaHoras->fechaHorometro = Carbon::parse($request->fechaHorometro);
        $horometroCuarentaHoras->turnoHorometro = $request->turnoHorometro;
        $horometroCuarentaHoras->inicialHorometro = $request->inicialHorometro;
        $horometroCuarentaHoras->finalHorometro = $request->finalHorometro;
        $horometroCuarentaHoras->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro , 2);
        $horometroCuarentaHoras->save();

        // HOROMETROS PARA EL MANTENIMIENTO DE CIENTO VEINTE HORAS
        $horometroCientoVeinteHoras = new horometroCientoVeinteHoras();
        $horometroCientoVeinteHoras->fechaHorometro = Carbon::parse($request->fechaHorometro);
        $horometroCientoVeinteHoras->turnoHorometro = $request->turnoHorometro;
        $horometroCientoVeinteHoras->inicialHorometro = $request->inicialHorometro;
        $horometroCientoVeinteHoras->finalHorometro = $request->finalHorometro;
        $horometroCientoVeinteHoras->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro , 2);
        $horometroCientoVeinteHoras->save();

        // HOROMETROS PARA EL MANTENIMIENTO DE MIL HORAS
        $horometroMilHoras = new horometroMilHoras();
        $horometroMilHoras->fechaHorometro = Carbon::parse($request->fechaHorometro);
        $horometroMilHoras->turnoHorometro = $request->turnoHorometro;
        $horometroMilHoras->inicialHorometro = $request->inicialHorometro;
        $horometroMilHoras->finalHorometro = $request->finalHorometro;
        $horometroMilHoras->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro , 2);
        $horometroMilHoras->save();

        // HOROMETROS PARA EL MANTENIMIENTO DE DOS MIL HORAS
        $horometroDosMilHoras = new horometroDosMilHoras();
        $horometroDosMilHoras->fechaHorometro = Carbon::parse($request->fechaHorometro);
        $horometroDosMilHoras->turnoHorometro = $request->turnoHorometro;
        $horometroDosMilHoras->inicialHorometro = $request->inicialHorometro;
        $horometroDosMilHoras->finalHorometro = $request->finalHorometro;
        $horometroDosMilHoras->totalHorometro = number_format($request->finalHorometro - $request->inicialHorometro , 2);
        $horometroDosMilHoras->save();

        $registroHorometro = horometro::all();
        return view('horometros.index', compact('registroHorometro'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\horometro  $horometro
     * @return \Illuminate\Http\Response
     */
    public function show(horometro $horometro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\horometro  $horometro
     * @return \Illuminate\Http\Response
     */
    public function edit(horometro $horometro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\horometro  $horometro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, horometro $horometro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\horometro  $horometro
     * @return \Illuminate\Http\Response
     */
    public function destroy(horometro $horometro)
    {
        //
    }
}
