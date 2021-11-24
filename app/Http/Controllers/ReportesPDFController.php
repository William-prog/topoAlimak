<?php

namespace App\Http\Controllers;

use App\Models\registroServicio;

use App\Models\horometro;

use App\Models\registroCheckListOperativa;
use App\Models\registroCheckListProceso;
use App\Models\registroCheckListSeguridad;

use App\Models\registroCartaCuarentaHoras;
use App\Models\registroCartaCientoVeinteHoras;
use App\Models\registroCartaMilHoras;

use Carbon\Carbon;

use Illuminate\Http\Request;

class ReportesPDFController extends Controller
{
    // generarReportePorServicio
    public function generarReportePorServicio($fechaRegistro, $turno, $id)
    {
        $datos['registros'] = registroServicio::where('fechaRegistro', $fechaRegistro)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteServicio', $datos, compact('fechaRegistro', 'turno', 'id'));

        return $pdf->stream('pdfEventos.pdf', array("Attachment" => true));
    }

    // generarReportePorServicio
    public function generarReporteHorometro(Request $request)
    {
        $fechaD = Carbon::parse($request->Fecha_Desde_Horometro);
        $fechaH = Carbon::parse($request->Fecha_Hasta_Horometro);

        $datosHorometros = horometro::where('fechaHorometro', '>=', $fechaD)
            ->where('fechaHorometro', '<=', $fechaH)
            ->orderBy('fechaHorometro', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteHorometro', compact('datosHorometros'));

        return $pdf->stream('reportesPDF.reporteHorometro', array("Attachment" => true));
    }

    public function generarReporteOperativa($id)
    {
        $registroCheckListOperativa = new registroCheckListOperativa();

        $datos['registros'] = $registroCheckListOperativa::where('id', $id)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteCheckListOperativa', $datos, compact('id'));

        return $pdf->stream('pdfEventos.pdf', array("Attachment" => true));
    }

    public function generarReporteProceso($id)
    {
        $registroCheckListProceso = new registroCheckListProceso();

        $datos['registros'] = $registroCheckListProceso::where('id', $id)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteCheckListProceso', $datos, compact('id'));

        return $pdf->stream('pdfEventos.pdf', array("Attachment" => true));
    }

    public function generarReporteSeguridad($id)
    {
        $registroCheckListSeguridad = new registroCheckListSeguridad();

        $datos['registros'] = $registroCheckListSeguridad::where('id', $id)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteCheckListSeguridad', $datos, compact('id'));

        return $pdf->stream('pdfEventos.pdf', array("Attachment" => true));
    }

    public function generarReporteCartaCuarentaHoras($id)
    {
        $registroCartaCuarentaHoras = new registroCartaCuarentaHoras();

        $datos['registros'] = $registroCartaCuarentaHoras::where('id', $id)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteCartaCuarentaHoras', $datos, compact('id'));

        return $pdf->stream('pdfEventos.pdf', array("Attachment" => true));
    }
    
    public function generarReporteCartaCientoVeintaHoras($id)
    {
        $registroCartaCientoVeinteHoras = new registroCartaCientoVeinteHoras();

        $datos['registros'] = $registroCartaCientoVeinteHoras::where('id', $id)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteCartaCientoVeinteHoras', $datos, compact('id'));

        return $pdf->stream('pdfEventos.pdf', array("Attachment" => true));
    }

    public function generarReporteCartaMilHoras($id)
    {
        $registroCartaMilHoras = new registroCartaMilHoras();

        $datos['registros'] = $registroCartaMilHoras::where('id', $id)->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('reportesPDF.reporteCartaMilHoras', $datos, compact('id'));

        return $pdf->stream('pdfEventos.pdf', array("Attachment" => true));
    }
    
}
