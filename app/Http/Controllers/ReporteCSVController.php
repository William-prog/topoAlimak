<?php

namespace App\Http\Controllers;

use App\Exports\reporteServicioContratistasFechas;
use App\Models\registroServicio;

use App\Models\horometro;

use App\Models\registroCheckListOperativa;
use App\Models\registroCheckListProceso;
use App\Models\registroCheckListSeguridad;

use App\Models\registroCartaCuarentaHoras;
use App\Models\registroCartaCientoVeinteHoras;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

use SebastianBergmann\Environment\Console;

class ReporteCSVController extends Controller
{
    // generarReporteSericioContratista
    public function generarReporteSericioContratista(Request $request)
    {
        $fechaD = $request->Fecha_Desde;
        $fechaH = $request->Fecha_Hasta;

        $datosTopo = registroServicio::where('empresa', 'Servicios y Equipos TOPO S.A de C.V')
            ->where('fechaRegistro', '>=', $fechaD)
            ->where('fechaRegistro', '<=', $fechaH)
            ->orderBy('created_at', 'asc')->get();
        $resultadoFechaTopo = $datosTopo->unique('fechaRegistro');

        $datosFercons = registroServicio::where('empresa', 'FERCONS')
            ->where('fechaRegistro', '>=', $fechaD)
            ->where('fechaRegistro', '<=', $fechaH)
            ->orderBy('created_at', 'asc')->get();
        $resultadoFechaFercons = $datosFercons->unique('fechaRegistro');

        $datosPlc = registroServicio::where('empresa', 'Fresnillo PLC')
            ->where('fechaRegistro', '>=', $fechaD)
            ->where('fechaRegistro', '<=', $fechaH)
            ->orderBy('created_at', 'asc')->get();
        $resultadoFechaPlc = $datosPlc->unique('fechaRegistro');

        $datosCoymsa = registroServicio::where('empresa', 'COYMSA')
            ->where('fechaRegistro', '>=', $fechaD)
            ->where('fechaRegistro', '<=', $fechaH)
            ->orderBy('created_at', 'asc')->get();
        $resultadoFechaCoymsa = $datosCoymsa->unique('fechaRegistro');

        $datosClm = registroServicio::where('empresa', 'Cocretos Lanzados los Mochis CLM')
            ->where('fechaRegistro', '>=', $fechaD)
            ->where('fechaRegistro', '<=', $fechaH)
            ->orderBy('created_at', 'asc')->get();
        $resultadoFechaClm = $datosClm->unique('fechaRegistro');

        $datosTti = registroServicio::where('empresa', 'T.T.I')
            ->where('fechaRegistro', '>=', $fechaD)
            ->where('fechaRegistro', '<=', $fechaH)
            ->orderBy('created_at', 'asc')->get();
        $resultadoFechaTti = $datosTti->unique('fechaRegistro');

        $datosOmytc = registroServicio::where('empresa', 'Obras Mineras y Tiros del Centro OMYTC')
            ->where('fechaRegistro', '>=', $fechaD)
            ->where('fechaRegistro', '<=', $fechaH)
            ->orderBy('created_at', 'asc')->get();
        $resultadoFechaOmytc = $datosOmytc->unique('fechaRegistro');

        $datosOssa = registroServicio::where('empresa', 'OSSA')
            ->where('fechaRegistro', '>=', $fechaD)
            ->where('fechaRegistro', '<=', $fechaH)
            ->orderBy('created_at', 'asc')->get();
        $resultadoFechaOssa = $datosOssa->unique('fechaRegistro');

        return (new reporteServicioContratistasFechas)->forContador($resultadoFechaTopo, $datosTopo, $datosFercons, $resultadoFechaFercons, $datosPlc, $resultadoFechaPlc, $datosCoymsa, $resultadoFechaCoymsa, $datosClm, $resultadoFechaClm, $datosTti, $resultadoFechaTti, $datosOmytc, $resultadoFechaOmytc, $datosOssa, $resultadoFechaOssa)->download('LI-ADM-001-Rev.04 ' . $fechaD . '.xlsx');

    }
}
