<?php

namespace App\Http\Controllers;

use App\Models\registroServicio;

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

use App\Models\horometro;

use App\Models\horometroCuarentaHoras;
use App\Models\horometroCientoVeinteHoras;

use App\Models\registroCartaCuarentaHoras;
use App\Models\registroCartaCientoVeinteHoras;

use Carbon\Carbon;

use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    public function index()
    {
        $registroServicioEntradaTopo = registroServicioEntradaTopo::all();
        $registroServicioEntradaFercons = registroServicioEntradaFercons::all();
        $registroServicioEntradaFresnillo = registroServicioEntradaFresnillo::all();
        $registroServicioEntradaCoymsa = registroServicioEntradaCoymsa::all();
        $registroServicioEntradaClm = registroServicioEntradaClm::all();
        $registroServicioEntradaTti = registroServicioEntradaTti::all();
        $registroServicioEntradaOmytc = registroServicioEntradaOmytc::all();
        $registroServicioEntradaOssa = registroServicioEntradaOssa::all();

        $registroServicioSalidaTopo = registroServicioSalidaTopo::all();
        $registroServicioSalidaFercons = registroServicioSalidaFercons::all();
        $registroServicioSalidaFresnillo = registroServicioSalidaFresnillo::all();
        $registroServicioSalidaCoymsa = registroServicioSalidaCoymsa::all();
        $registroServicioSalidaClm = registroServicioSalidaClm::all();
        $registroServicioSalidaTti = registroServicioSalidaTti::all();
        $registroServicioSalidaOmytc = registroServicioSalidaOmytc::all();
        $registroServicioSalidaOssa = registroServicioSalidaOssa::all();

        $registroHorometro = horometro::all();

        $registroHorometroCuarentaHoras = horometroCuarentaHoras::all();
        $registroHorometroCientoVeinteHoras = horometroCientoVeinteHoras::all();

        $registroCartaCuarentaHoras = registroCartaCuarentaHoras::all();
        $registroCartaCientoVeinteHoras = registroCartaCientoVeinteHoras::all();

        return view('estadisticas.index', compact(
            'registroServicioEntradaTopo',
            'registroServicioEntradaFercons',
            'registroServicioEntradaFresnillo',
            'registroServicioEntradaCoymsa',
            'registroServicioEntradaClm',
            'registroServicioEntradaTti',
            'registroServicioEntradaOmytc',
            'registroServicioEntradaOssa',
            'registroServicioSalidaTopo',
            'registroServicioSalidaFercons',
            'registroServicioSalidaFresnillo',
            'registroServicioSalidaCoymsa',
            'registroServicioSalidaClm',
            'registroServicioSalidaTti',
            'registroServicioSalidaOmytc',
            'registroServicioSalidaOssa',
            'registroHorometro',
            'registroHorometroCuarentaHoras',
            'registroHorometroCientoVeinteHoras',
            'registroCartaCuarentaHoras',
            'registroCartaCientoVeinteHoras'
        ));
    }
}
