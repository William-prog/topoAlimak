<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class reporteServicioContratistasFechas implements FromView
{
    use Exportable;

    public function forContador($resultadoFechaTopo, $datosTopo, $datosFercons, $resultadoFechaFercons, $datosPlc, $resultadoFechaPlc, $datosCoymsa, $resultadoFechaCoymsa, $datosClm, $resultadoFechaClm, $datosTti, $resultadoFechaTti, $datosOmytc, $resultadoFechaOmytc, $datosOssa, $resultadoFechaOssa)
    {
        $this->resultadoFechaTopo = $resultadoFechaTopo;
        $this->datosTopo = $datosTopo;
        $this->datosFercons = $datosFercons;
        $this->resultadoFechaFercons = $resultadoFechaFercons;
        $this->datosPlc = $datosPlc;
        $this->resultadoFechaPlc = $resultadoFechaPlc;
        $this->datosCoymsa = $datosCoymsa;
        $this->resultadoFechaCoymsa = $resultadoFechaCoymsa;
        $this->datosClm = $datosClm;
        $this->resultadoFechaClm = $resultadoFechaClm;
        $this->datosTti = $datosTti;
        $this->resultadoFechaTti = $resultadoFechaTti;
        $this->datosOmytc = $datosOmytc;
        $this->resultadoFechaOmytc = $resultadoFechaOmytc;
        $this->datosOssa = $datosOssa;
        $this->resultadoFechaOssa = $resultadoFechaOssa;
        return $this;
    }

    public function view(): View
    {
        $resultadoFechaTopo = $this->resultadoFechaTopo;
        $datosTopo = $this->datosTopo;
        $datosFercons = $this->datosFercons;
        $resultadoFechaFercons = $this->resultadoFechaFercons;
        $datosPlc = $this->datosPlc;
        $resultadoFechaPlc = $this->resultadoFechaPlc;
        $datosCoymsa = $this->datosCoymsa;
        $resultadoFechaCoymsa = $this->resultadoFechaCoymsa;
        $datosClm = $this->datosClm;
        $resultadoFechaClm = $this->resultadoFechaClm;
        $datosTti = $this->datosTti;
        $resultadoFechaTti = $this->resultadoFechaTti;
        $datosOmytc = $this->datosOmytc;
        $resultadoFechaOmytc = $this->resultadoFechaOmytc;
        $datosOssa = $this->datosOssa;
        $resultadoFechaOssa = $this->resultadoFechaOssa;

        return view('reporteCSV.reporteServicioContratistas', compact('resultadoFechaTopo', 'datosTopo', 'datosFercons', 'resultadoFechaFercons', 'datosPlc', 'resultadoFechaPlc', 'datosCoymsa', 'resultadoFechaCoymsa', 'datosClm', 'resultadoFechaClm', 'datosTti', 'resultadoFechaTti', 'datosOmytc', 'resultadoFechaOmytc', 'datosOssa', 'resultadoFechaOssa'));
    }
}
