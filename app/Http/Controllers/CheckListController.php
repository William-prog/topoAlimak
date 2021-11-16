<?php

namespace App\Http\Controllers;

use App\Models\registroCheckListOperativa;
use App\Models\registroCheckListProceso;
use App\Models\registroCheckListSeguridad;

use Illuminate\Http\Request;

class CheckListController extends Controller
{
    public function index()
    {
        $registroCheckListOperativa = registroCheckListOperativa::all();
        $registroCheckListProceso   = registroCheckListProceso::all();
        $registroCheckListSeguridad = registroCheckListSeguridad::all();
        
        return view('supervicion.index', compact('registroCheckListOperativa', 'registroCheckListProceso', 'registroCheckListSeguridad'));
    }
}