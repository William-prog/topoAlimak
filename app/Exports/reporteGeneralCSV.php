<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class reporteGeneralCSV implements FromView
{
    use Exportable;

    public function forReporte($datosGeneralesHorometro, $datosRegistroServicioEntradaTopo, $datosRegistroServicioEntradaFercons, $datosRegistroServicioEntradaFresnillo, $datosRegistroServicioEntradaCoymsa, $datosRegistroServicioEntradaClm, $datosRegistroServicioEntradaOmytc, $datosRegistroServicioEntradaOssa, $datosRegistroServicioSalidaTopo, $datosRegistroServicioSalidaFercons, $datosRegistroServicioSalidaFresnillo, $datosRegistroServicioSalidaCoymsa, $datosRegistroServicioSalidaClm, $datosRegistroServicioSalidaOmytc, $datosRegistroServicioSalidaOssa, $datosRegistroCartaCuarentaHoras, $datosRegistroCartaCientoVeinteHoras)
    {
        $this->datosGeneralesHorometro = $datosGeneralesHorometro;
        $this->datosRegistroServicioEntradaTopo = $datosRegistroServicioEntradaTopo;
        $this->datosRegistroServicioEntradaFercons = $datosRegistroServicioEntradaFercons;
        $this->datosRegistroServicioEntradaFresnillo = $datosRegistroServicioEntradaFresnillo;
        $this->datosRegistroServicioEntradaCoymsa = $datosRegistroServicioEntradaCoymsa;
        $this->datosRegistroServicioEntradaClm = $datosRegistroServicioEntradaClm;
        $this->datosRegistroServicioEntradaOmytc = $datosRegistroServicioEntradaOmytc;
        $this->datosRegistroServicioEntradaOssa = $datosRegistroServicioEntradaOssa;
        $this->datosRegistroServicioSalidaTopo = $datosRegistroServicioSalidaTopo;
        $this->datosRegistroServicioSalidaFercons = $datosRegistroServicioSalidaFercons;
        $this->datosRegistroServicioSalidaFresnillo = $datosRegistroServicioSalidaFresnillo;
        $this->datosRegistroServicioSalidaCoymsa = $datosRegistroServicioSalidaCoymsa;
        $this->datosRegistroServicioSalidaClm = $datosRegistroServicioSalidaClm;
        $this->datosRegistroServicioSalidaOmytc = $datosRegistroServicioSalidaOmytc;
        $this->datosRegistroServicioSalidaOssa = $datosRegistroServicioSalidaOssa;
        $this->datosRegistroCartaCuarentaHoras = $datosRegistroCartaCuarentaHoras;
        $this->datosRegistroCartaCientoVeinteHoras = $datosRegistroCartaCientoVeinteHoras;
        return $this;
    }

    public function view(): View
    {
        $datosGeneralesHorometro = $this->datosGeneralesHorometro;
        $datosRegistroServicioEntradaTopo = $this->datosRegistroServicioEntradaTopo;
        $datosRegistroServicioEntradaFercons = $this->datosRegistroServicioEntradaFercons;
        $datosRegistroServicioEntradaFresnillo = $this->datosRegistroServicioEntradaFresnillo;
        $datosRegistroServicioEntradaCoymsa = $this->datosRegistroServicioEntradaCoymsa;
        $datosRegistroServicioEntradaClm = $this->datosRegistroServicioEntradaClm;
        $datosRegistroServicioEntradaOmytc = $this->datosRegistroServicioEntradaOmytc;
        $datosRegistroServicioEntradaOssa = $this->datosRegistroServicioEntradaOssa;
        $datosRegistroServicioSalidaTopo = $this->datosRegistroServicioSalidaTopo;
        $datosRegistroServicioSalidaFercons = $this->datosRegistroServicioSalidaFercons;
        $datosRegistroServicioSalidaFresnillo = $this->datosRegistroServicioSalidaFresnillo;
        $datosRegistroServicioSalidaCoymsa = $this->datosRegistroServicioSalidaCoymsa;
        $datosRegistroServicioSalidaClm = $this->datosRegistroServicioSalidaClm;
        $datosRegistroServicioSalidaOmytc = $this->datosRegistroServicioSalidaOmytc;
        $datosRegistroServicioSalidaOssa = $this->datosRegistroServicioSalidaOssa;
        $datosRegistroCartaCuarentaHoras = $this->datosRegistroCartaCuarentaHoras;
        $datosRegistroCartaCientoVeinteHoras = $this->datosRegistroCartaCientoVeinteHoras;

        return view('reporteCSV.reporteGeneral', compact('datosGeneralesHorometro', 'datosRegistroServicioEntradaTopo', 'datosRegistroServicioEntradaFercons', 'datosRegistroServicioEntradaFresnillo', 'datosRegistroServicioEntradaCoymsa', 'datosRegistroServicioEntradaClm', 'datosRegistroServicioEntradaOmytc', 'datosRegistroServicioEntradaOssa', 'datosRegistroServicioSalidaTopo', 'datosRegistroServicioSalidaFercons', 'datosRegistroServicioSalidaFresnillo', 'datosRegistroServicioSalidaCoymsa', 'datosRegistroServicioSalidaClm', 'datosRegistroServicioSalidaOmytc', 'datosRegistroServicioSalidaOssa', 'datosRegistroCartaCuarentaHoras', 'datosRegistroCartaCientoVeinteHoras'));
    }
}
