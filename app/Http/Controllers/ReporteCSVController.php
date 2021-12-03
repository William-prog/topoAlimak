<?php

namespace App\Http\Controllers;

use App\Exports\reporteServicioContratistasFechas;
use App\Exports\reporteGeneralCSV;

use App\Models\registroServicio;

use App\Models\horometro;

use App\Models\registroServicioEntradaTopo;
use App\Models\registroServicioEntradaFercons;
use App\Models\registroServicioEntradaFresnillo;
use App\Models\registroServicioEntradaCoymsa;
use App\Models\registroServicioEntradaClm;
use App\Models\registroServicioEntradaTti;
use App\Models\registroServicioEntradaOmytc;
use App\Models\registroServicioEntradaOssa;

use App\Models\registroServicioSalidaTopo;
use App\Models\registroServicioSalidaFercons;
use App\Models\registroServicioSalidaFresnillo;
use App\Models\registroServicioSalidaCoymsa;
use App\Models\registroServicioSalidaClm;
use App\Models\registroServicioSalidaTti;
use App\Models\registroServicioSalidaOmytc;
use App\Models\registroServicioSalidaOssa;

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

    // generarReporteGeneralMensual
    public function generarReporteGeneral(Request $request)
    {
        $fechaDG = $request->Fecha_Desde_General;
        $fechaHG = $request->Fecha_Hasta_General;


        $datosGeneralesHorometro = horometro::where('fechaHorometro', '>=', $fechaDG)
            ->where('fechaHorometro', '<=', $fechaHG)
            ->orderBy('inicialHorometro', 'desc')->get();

        $datosRegistroServicioEntradaTopo = $request->datoTOPOEntrada;
        $datosRegistroServicioEntradaFercons =  $request->datoFERCONSEntrada;
        $datosRegistroServicioEntradaFresnillo = $request->datoPLCEntrada;
        $datosRegistroServicioEntradaCoymsa = $request->datoCOYMSAEntrada;
        $datosRegistroServicioEntradaClm = $request->datoCLMEntrada;
        $datosRegistroServicioEntradaOmytc = $request->datoOMyTCEntrada;
        $datosRegistroServicioEntradaOssa = $request->datoOSSAEntrada;


        $datosRegistroServicioSalidaTopo = $request->datoTOPOSalida;
        $datosRegistroServicioSalidaFercons =  $request->datoFERCONSSalida;
        $datosRegistroServicioSalidaFresnillo = $request->datoPLCSalida;
        $datosRegistroServicioSalidaCoymsa = $request->datoCOYMSASalida;
        $datosRegistroServicioSalidaClm = $request->datoCLMSalida;
        $datosRegistroServicioSalidaOmytc = $request->datoOMyTCSalida;
        $datosRegistroServicioSalidaOssa = $request->datoOSSASalida;

        $datosRegistroCartaCuarentaHoras = registroCartaCuarentaHoras::where('cuarenta_Fecha', '>=', $fechaDG)->where('cuarenta_Fecha', '<=', $fechaHG)->orderBy('cuarenta_Fecha', 'desc')->get();
        $datosRegistroCartaCientoVeinteHoras = registroCartaCientoVeinteHoras::where('cientoVeinte_Fecha', '>=', $fechaDG)->where('cientoVeinte_Fecha', '<=', $fechaHG)->orderBy('cientoVeinte_Fecha', 'desc')->get();


        return (new reporteGeneralCSV)->forReporte(
            $datosGeneralesHorometro, 
            $datosRegistroServicioEntradaTopo, 
            $datosRegistroServicioEntradaFercons, 
            $datosRegistroServicioEntradaFresnillo, 
            $datosRegistroServicioEntradaCoymsa, 
            $datosRegistroServicioEntradaClm, 
            $datosRegistroServicioEntradaOmytc, 
            $datosRegistroServicioEntradaOssa, 
            $datosRegistroServicioSalidaTopo, 
            $datosRegistroServicioSalidaFercons, 
            $datosRegistroServicioSalidaFresnillo, 
            $datosRegistroServicioSalidaCoymsa, 
            $datosRegistroServicioSalidaClm, 
            $datosRegistroServicioSalidaOmytc, 
            $datosRegistroServicioSalidaOssa, 
            $datosRegistroCartaCuarentaHoras, 
            $datosRegistroCartaCientoVeinteHoras)->download('Reporte General ALIMAK ' . $fechaDG . '.xlsx');
    }
}
