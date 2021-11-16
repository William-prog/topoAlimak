<?php

namespace App\Http\Controllers;

use App\Models\registroServicio;

use Illuminate\Http\Request;

class InformesController extends Controller
{
    public function index()
    {
        $registroServicio = registroServicio::where('empresa', '=', 'Servicios y Equipos TOPO S.A de C.V')->orderBy('created_at', 'asc')->get();
        $registrosOpe = registroServicio::where('idForanea', '!=', '')->orderBy('created_at', 'asc')->get();


        return view('informes.index', compact('registroServicio', 'registrosOpe'));
    }
}
