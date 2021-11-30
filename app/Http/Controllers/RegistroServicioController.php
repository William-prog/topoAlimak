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

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Empleado;

use App\Exports\registroCSV;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RegistroServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroServicio.create');
    }

    public function fetchEmployee(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query');
            if ($query != '' && Empleado::where('numeroEmpleado', '=', $query)->exists()) {
                $response = DB::table('empleados')->where('numeroEmpleado', 'like', $query)->get();
                $data = $response;
                foreach ($data as $key) {
                    $info = array(
                        'numeroEmpleado' => $key->numeroEmpleado,
                        'nombreEmpleado' => $key->nombreEmpleado,
                    );
                }
                echo json_encode($info);
            } else {
                if (strlen($query) == 3) {
                    echo json_encode("NO HAY EMPLEADO REALACIONADO");
                    $info = array(
                        'numeroEmpleado' => '',
                        'nombreEmpleado' => '',
                    );
                }
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cantidadUsuarios = count($request->numeroEmpleado);

        if ($request->tipoServicio[0] == 'Entrada') {

            if ($request->empresa[0] == 'Servicios y Equipos TOPO S.A de C.V') {
                $registroServicioEntradaTopo = new registroServicioEntradaTopo();
                $registroServicioEntradaTopo->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaTopo->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaTopo->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaTopo->cantidadEntrada = $cantidadUsuarios;
                $registroServicioEntradaTopo->save();

                $registroServicioEntradaFercons = new registroServicioEntradaFercons();
                $registroServicioEntradaFercons->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaFercons->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaFercons->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaFercons->cantidadEntrada = 0;
                $registroServicioEntradaFercons->save();

                $registroServicioEntradaFresnillo = new registroServicioEntradaFresnillo();
                $registroServicioEntradaFresnillo->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaFresnillo->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaFresnillo->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaFresnillo->cantidadEntrada = 0;
                $registroServicioEntradaFresnillo->save();

                $registroServicioEntradaCoymsa = new registroServicioEntradaCoymsa();
                $registroServicioEntradaCoymsa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaCoymsa->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaCoymsa->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaCoymsa->cantidadEntrada = 0;
                $registroServicioEntradaCoymsa->save();

                $registroServicioEntradaClm = new registroServicioEntradaClm();
                $registroServicioEntradaClm->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaClm->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaClm->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaClm->cantidadEntrada = 0;
                $registroServicioEntradaClm->save();

                $registroServicioEntradaTti = new registroServicioEntradaTti();
                $registroServicioEntradaTti->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaTti->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaTti->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaTti->cantidadEntrada = 0;
                $registroServicioEntradaTti->save();

                $registroServicioEntradaOmytc = new registroServicioEntradaOmytc();
                $registroServicioEntradaOmytc->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaOmytc->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaOmytc->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaOmytc->cantidadEntrada = 0;
                $registroServicioEntradaOmytc->save();

                $registroServicioEntradaOssa = new registroServicioEntradaOssa();
                $registroServicioEntradaOssa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaOssa->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaOssa->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaOssa->cantidadEntrada = 0;
                $registroServicioEntradaOssa->save();
            }

            if ($request->empresa[0] == 'FERCONS') {
                $registroServicioEntradaFercons = new registroServicioEntradaFercons();
                $registroServicioEntradaFercons->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaFercons->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaFercons->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaFercons->cantidadEntrada = $cantidadUsuarios;
                $registroServicioEntradaFercons->save();
            }

            if ($request->empresa[0] == 'Fresnillo PLC') {
                $registroServicioEntradaFresnillo = new registroServicioEntradaFresnillo();
                $registroServicioEntradaFresnillo->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaFresnillo->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaFresnillo->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaFresnillo->cantidadEntrada = $cantidadUsuarios;
                $registroServicioEntradaFresnillo->save();
            }

            if ($request->empresa[0] == 'COYMSA') {
                $registroServicioEntradaCoymsa = new registroServicioEntradaCoymsa();
                $registroServicioEntradaCoymsa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaCoymsa->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaCoymsa->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaCoymsa->cantidadEntrada = $cantidadUsuarios;
                $registroServicioEntradaCoymsa->save();
            }

            if ($request->empresa[0] == 'Cocretos Lanzados los Mochis CLM') {
                $registroServicioEntradaClm = new registroServicioEntradaClm();
                $registroServicioEntradaClm->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaClm->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaClm->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaClm->cantidadEntrada = $cantidadUsuarios;
                $registroServicioEntradaClm->save();
            }

            if ($request->empresa[0] == 'T.T.I') {
                $registroServicioEntradaTti = new registroServicioEntradaTti();
                $registroServicioEntradaTti->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaTti->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaTti->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaTti->cantidadEntrada = $cantidadUsuarios;
                $registroServicioEntradaTti->save();
            }

            if ($request->empresa[0] == 'Obras Mineras y Tiros del Centro OMYTC') {
                $registroServicioEntradaOmytc = new registroServicioEntradaOmytc();
                $registroServicioEntradaOmytc->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaOmytc->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaOmytc->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaOmytc->cantidadEntrada = $cantidadUsuarios;
                $registroServicioEntradaOmytc->save();
            }

            if ($request->empresa[0] == 'OSSA') {
                $registroServicioEntradaOssa = new registroServicioEntradaOssa();
                $registroServicioEntradaOssa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioEntradaOssa->fechaRegistroEntrada = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioEntradaOssa->finalTurnoEntrada = $request->turno[0];
                $registroServicioEntradaOssa->cantidadEntrada = $cantidadUsuarios;
                $registroServicioEntradaOssa->save();
            }
        }

        if ($request->tipoServicio[0] == 'Salida') {
            if ($request->empresa[0] == 'Servicios y Equipos TOPO S.A de C.V') {
                $registroServicioSalidaTopo = new registroServicioSalidaTopo();
                $registroServicioSalidaTopo->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioSalidaTopo->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioSalidaTopo->finalTurnoSalida = $request->turno[0];
                $registroServicioSalidaTopo->cantidadSalida = $cantidadUsuarios;
                $registroServicioSalidaTopo->save();
            }

            if ($request->empresa[0] == 'FERCONS') {
                $registroServicioSalidaFercons = new registroServicioSalidaFercons();
                $registroServicioSalidaFercons->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioSalidaFercons->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioSalidaFercons->finalTurnoSalida = $request->turno[0];
                $registroServicioSalidaFercons->cantidadSalida = $cantidadUsuarios;
                $registroServicioSalidaFercons->save();
            }

            if ($request->empresa[0] == 'Fresnillo PLC') {
                $registroServicioSalidaFresnillo = new registroServicioSalidaFresnillo();
                $registroServicioSalidaFresnillo->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioSalidaFresnillo->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioSalidaFresnillo->finalTurnoSalida = $request->turno[0];
                $registroServicioSalidaFresnillo->cantidadSalida = $cantidadUsuarios;
                $registroServicioSalidaFresnillo->save();
            }

            if ($request->empresa[0] == 'COYMSA') {
                $registroServicioSalidaCoymsa = new registroServicioSalidaCoymsa();
                $registroServicioSalidaCoymsa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioSalidaCoymsa->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioSalidaCoymsa->finalTurnoSalida = $request->turno[0];
                $registroServicioSalidaCoymsa->cantidadSalida = $cantidadUsuarios;
                $registroServicioSalidaCoymsa->save();
            }

            if ($request->empresa[0] == 'Cocretos Lanzados los Mochis CLM') {
                $registroServicioSalidaClm = new registroServicioSalidaClm();
                $registroServicioSalidaClm->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioSalidaClm->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioSalidaClm->finalTurnoSalida = $request->turno[0];
                $registroServicioSalidaClm->cantidadSalida = $cantidadUsuarios;
                $registroServicioSalidaClm->save();
            }

            if ($request->empresa[0] == 'T.T.I') {
                $registroServicioSalidaTti = new registroServicioSalidaTti();
                $registroServicioSalidaTti->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioSalidaTti->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioSalidaTti->finalTurnoSalida = $request->turno[0];
                $registroServicioSalidaTti->cantidadSalida = $cantidadUsuarios;
                $registroServicioSalidaTti->save();
            }

            if ($request->empresa[0] == 'Obras Mineras y Tiros del Centro OMYTC') {
                $registroServicioSalidaOmytc = new registroServicioSalidaOmytc();
                $registroServicioSalidaOmytc->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioSalidaOmytc->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioSalidaOmytc->finalTurnoSalida = $request->turno[0];
                $registroServicioSalidaOmytc->cantidadSalida = $cantidadUsuarios;
                $registroServicioSalidaOmytc->save();
            }

            if ($request->empresa[0] == 'OSSA') {
                $registroServicioSalidaOssa = new registroServicioSalidaOssa();
                $registroServicioSalidaOssa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
                $registroServicioSalidaOssa->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
                $registroServicioSalidaOssa->finalTurnoSalida = $request->turno[0];
                $registroServicioSalidaOssa->cantidadSalida = $cantidadUsuarios;
                $registroServicioSalidaOssa->save();
            }
        }

        $ultimoId = registroServicio::latest('id')->first();

        if (empty($ultimoId)) {
            $idForanea = 1;
        } else {
            $idForanea = $ultimoId->id + 1;
        }

        for ($i = 0; $i < $cantidadUsuarios; $i++) {
            $registroServicio = new registroServicio();

            $registroServicio->idForanea = $idForanea;

            $registroServicio->codigoIdentificador = Carbon::parse($request->fechaRegistro[$i]) . '-' . $request->turno[$i];
            $registroServicio->fechaRegistro = Carbon::parse($request->fechaRegistro[$i]);
            $registroServicio->turno = $request->turno[$i];
            $registroServicio->horometroIni = $request->horometroIni[$i];
            $registroServicio->horometroFin = '000';
            $registroServicio->horometroRes = '0';


            if ($request->tipoServicio[$i] == 'Entrada') {
                $registroServicio->horaEntrada = $request->horaEntrada[$i];
                $registroServicio->nivelTrabajo = $request->nivelTrabajo[$i];
                $registroServicio->horaSalida = "---";
                $registroServicio->nivelTrabajoS = "---";
            }

            if ($request->tipoServicio[$i] == 'Salida') {
                $registroServicio->horaEntrada = "---";
                $registroServicio->nivelTrabajo = "---";
                $registroServicio->horaSalida = $request->horaEntrada[$i];
                $registroServicio->nivelTrabajoS = $request->nivelTrabajo[$i];
            }

            $registroServicio->tipoServicio = $request->tipoServicio[$i];

            $registroServicio->numeroEmpleado = $request->numeroEmpleado[$i];
            $registroServicio->nombre = $request->nombre[$i];
            $registroServicio->empresa = $request->empresa[$i];

            $registroServicio->observaciones = $request->observaciones[$i];
            $registroServicio->encargado = $request->encargado[$i];
            $registroServicio->numOperador = $request->numOperador[$i];
            $registroServicio->nomOperador = $request->nomOperador[$i];

            $registroServicio->verifico = $request->verifico[$i];
            $registroServicio->recibeTurno = $request->recibeTurno[$i];

            $registroServicio->save();
        }

        return redirect('informes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroServicio  $registroServicio
     * @return \Illuminate\Http\Response
     */
    public function show(registroServicio $registroServicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroServicio  $registroServicio
     * @return \Illuminate\Http\Response
     */
    public function edit($idForanea)
    {
        $datos['registros'] = registroServicio::where('idForanea', $idForanea)->get();
        return view('registroServicio.edit', $datos, compact('idForanea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroServicio  $registroServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idForanea)
    {
        $cantidadUsuarios = count($request->numeroEmpleado);

        if ($request->empresa[0] == 'Servicios y Equipos TOPO S.A de C.V') {
            $registroServicioSalidaTopo = new registroServicioSalidaTopo();
            $registroServicioSalidaTopo->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaTopo->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaTopo->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaTopo->cantidadSalida = $cantidadUsuarios;
            $registroServicioSalidaTopo->save();

            $registroServicioSalidaFercons = new registroServicioSalidaFercons();
            $registroServicioSalidaFercons->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaFercons->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaFercons->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaFercons->cantidadSalida = 0;
            $registroServicioSalidaFercons->save();

            $registroServicioSalidaFresnillo = new registroServicioSalidaFresnillo();
            $registroServicioSalidaFresnillo->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaFresnillo->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaFresnillo->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaFresnillo->cantidadSalida = 0;
            $registroServicioSalidaFresnillo->save();

            $registroServicioSalidaCoymsa = new registroServicioSalidaCoymsa();
            $registroServicioSalidaCoymsa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaCoymsa->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaCoymsa->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaCoymsa->cantidadSalida = 0;
            $registroServicioSalidaCoymsa->save();

            $registroServicioSalidaClm = new registroServicioSalidaClm();
            $registroServicioSalidaClm->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaClm->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaClm->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaClm->cantidadSalida = 0;
            $registroServicioSalidaClm->save();

            $registroServicioSalidaTti = new registroServicioSalidaTti();
            $registroServicioSalidaTti->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaTti->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaTti->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaTti->cantidadSalida = 0;
            $registroServicioSalidaTti->save();

            $registroServicioSalidaOmytc = new registroServicioSalidaOmytc();
            $registroServicioSalidaOmytc->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaOmytc->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaOmytc->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaOmytc->cantidadSalida = 0;
            $registroServicioSalidaOmytc->save();

            $registroServicioSalidaOssa = new registroServicioSalidaOssa();
            $registroServicioSalidaOssa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaOssa->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaOssa->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaOssa->cantidadSalida = 0;
            $registroServicioSalidaOssa->save();
        }

        if ($request->empresa[0] == 'FERCONS') {
            $registroServicioSalidaFercons = new registroServicioSalidaFercons();
            $registroServicioSalidaFercons->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaFercons->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaFercons->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaFercons->cantidadSalida = $cantidadUsuarios;
            $registroServicioSalidaFercons->save();
        }

        if ($request->empresa[0] == 'Fresnillo PLC') {
            $registroServicioSalidaFresnillo = new registroServicioSalidaFresnillo();
            $registroServicioSalidaFresnillo->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaFresnillo->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaFresnillo->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaFresnillo->cantidadSalida = $cantidadUsuarios;
            $registroServicioSalidaFresnillo->save();
        }

        if ($request->empresa[0] == 'COYMSA') {
            $registroServicioSalidaCoymsa = new registroServicioSalidaCoymsa();
            $registroServicioSalidaCoymsa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaCoymsa->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaCoymsa->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaCoymsa->cantidadSalida = $cantidadUsuarios;
            $registroServicioSalidaCoymsa->save();
        }

        if ($request->empresa[0] == 'Cocretos Lanzados los Mochis CLM') {
            $registroServicioSalidaClm = new registroServicioSalidaClm();
            $registroServicioSalidaClm->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaClm->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaClm->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaClm->cantidadSalida = $cantidadUsuarios;
            $registroServicioSalidaClm->save();
        }

        if ($request->empresa[0] == 'T.T.I') {
            $registroServicioSalidaTti = new registroServicioSalidaTti();
            $registroServicioSalidaTti->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaTti->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaTti->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaTti->cantidadSalida = $cantidadUsuarios;
            $registroServicioSalidaTti->save();
        }

        if ($request->empresa[0] == 'Obras Mineras y Tiros del Centro OMYTC') {
            $registroServicioSalidaOmytc = new registroServicioSalidaOmytc();
            $registroServicioSalidaOmytc->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaOmytc->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaOmytc->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaOmytc->cantidadSalida = $cantidadUsuarios;
            $registroServicioSalidaOmytc->save();
        }

        if ($request->empresa[0] == 'OSSA') {
            $registroServicioSalidaOssa = new registroServicioSalidaOssa();
            $registroServicioSalidaOssa->codigoIdentificador = Carbon::parse($request->fechaRegistro[0]) . '-' . $request->turno[0];
            $registroServicioSalidaOssa->fechaRegistroSalida = Carbon::parse($request->fechaRegistro[0]);
            $registroServicioSalidaOssa->finalTurnoSalida = $request->turno[0];
            $registroServicioSalidaOssa->cantidadSalida = $cantidadUsuarios;
            $registroServicioSalidaOssa->save();
        }

        $ultimoId = registroServicio::latest('id')->first();

        if (empty($ultimoId)) {
            $idForaneaRegistroSalida = 1;
        } else {
            $idForaneaRegistroSalida = $ultimoId->id + 1;
        }

        for ($i = 0; $i < $cantidadUsuarios; $i++) {
            $registroServicio = new registroServicio();

            $registroServicio->idForanea = $idForaneaRegistroSalida;

            $registroServicio->codigoIdentificador = Carbon::parse($request->fechaRegistro[$i]) . '-' . $request->turno[$i];
            $registroServicio->fechaRegistro = Carbon::parse($request->fechaRegistro[$i]);
            $registroServicio->turno = $request->turno[$i];
            $registroServicio->horometroIni = $request->horometroIni[$i];
            $registroServicio->horometroFin = '000';
            $registroServicio->horometroRes = '0';

            $registroServicio->horaEntrada = $request->horaEntrada[$i];
            $registroServicio->nivelTrabajo = $request->nivelTrabajo[$i];

            $registroServicio->horaSalida = $request->horaSalida[$i];
            $registroServicio->nivelTrabajoS = $request->nivelTrabajoS[$i];

            $registroServicio->tipoServicio = $request->tipoServicio[$i];

            $registroServicio->numeroEmpleado = $request->numeroEmpleado[$i];
            $registroServicio->nombre = $request->nombre[$i];
            $registroServicio->empresa = $request->empresa[$i];

            $registroServicio->observaciones = $request->observaciones[$i];
            $registroServicio->encargado = $request->encargado[$i];
            $registroServicio->numOperador = $request->numOperador[$i];
            $registroServicio->nomOperador = $request->nomOperador[$i];

            $registroServicio->verifico = $request->verifico[$i];
            $registroServicio->recibeTurno = $request->recibeTurno[$i];

            $registroServicio->save();
        }

        registroServicio::where('idForanea', $idForanea)->delete();

        return redirect('informes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroServicio  $registroServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroServicio $registroServicio)
    {
        //
    }
}
