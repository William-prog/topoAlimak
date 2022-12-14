<?php

namespace App\Http\Controllers;

use App\Models\usuariosLogueado;
use App\Models\User;

use Illuminate\Http\Request;

class UsuariosLogueadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariosLogueado = usuariosLogueado::orderBy('id', 'desc')->get();
        $usuariosRegistrados = User::all();
        return view('usuarios.index', compact('usuariosLogueado', 'usuariosRegistrados'));
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
     * @param  \App\Models\usuariosLogueado  $usuariosLogueado
     * @return \Illuminate\Http\Response
     */
    public function show(usuariosLogueado $usuariosLogueado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuariosLogueado  $usuariosLogueado
     * @return \Illuminate\Http\Response
     */
    public function edit(usuariosLogueado $usuariosLogueado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuariosLogueado  $usuariosLogueado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuariosLogueado $usuariosLogueado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuariosLogueado  $usuariosLogueado
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuariosLogueado $usuariosLogueado)
    {
        //
    }
}
