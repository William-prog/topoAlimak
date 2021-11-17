<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
    public function diagnostico()
    {
        return view('generalidades.diagnostico');
    }
    
    public function mapaProcesos()
    {
        return view('generalidades.mapaProcesos');
    }
    
    public function procedimientoTecnico()
    {
        return view('generalidades.procedimientoTecnico');
    }
}
