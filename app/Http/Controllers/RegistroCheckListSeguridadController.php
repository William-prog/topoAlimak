<?php

namespace App\Http\Controllers;

use App\Models\registroCheckListSeguridad;

use Carbon\Carbon;

use Illuminate\Http\Request;

class RegistroCheckListSeguridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroCheckListSeguridad = registroCheckListSeguridad::all();
        return view('registroCheckListSeguridad.index', compact('registroCheckListSeguridad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroCheckListSeguridad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroCheckListSeguridad = new registroCheckListSeguridad();

        $registroCheckListSeguridad->cls_Activadad = $request->input('cls_Activadad');
        $registroCheckListSeguridad->cls_Depto = $request->input('cls_Depto');
        $registroCheckListSeguridad->cls_Ubicacion = $request->input('cls_Ubicacion');

        $registroCheckListSeguridad->cls_Turno = $request->input('cls_Turno');
        $registroCheckListSeguridad->cls_Horario = $request->input('cls_Horario');
        $registroCheckListSeguridad->cls_Fecha = Carbon::parse($request->input('cls_Fecha'));

        $registroCheckListSeguridad->cls_Verificador = $request->input('cls_Verificador');
        $registroCheckListSeguridad->cls_Categoria = $request->input('cls_Categoria');
        $registroCheckListSeguridad->cls_Encargado = $request->input('cls_Encargado');

        $registroCheckListSeguridad->cls_opcion_1_Ubic_1 = $request->input('cls_opcion_1_Ubic_1');
        $registroCheckListSeguridad->cls_opcion_2_Ubic_2 = $request->input('cls_opcion_2_Ubic_2');
        $registroCheckListSeguridad->cls_opcion_3_Ubic_3 = $request->input('cls_opcion_3_Ubic_3');
        $registroCheckListSeguridad->cls_opcion_4_Ubic_4 = $request->input('cls_opcion_4_Ubic_4');

        $registroCheckListSeguridad->cls_opcion_1_Evaluacion_1 = $request->input('cls_opcion_1_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_1_Evaluacion_2 = $request->input('cls_opcion_1_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_1_Evaluacion_3 = $request->input('cls_opcion_1_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_1_Evaluacion_4 = $request->input('cls_opcion_1_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_2_Evaluacion_1 = $request->input('cls_opcion_2_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_2_Evaluacion_2 = $request->input('cls_opcion_2_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_2_Evaluacion_3 = $request->input('cls_opcion_2_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_2_Evaluacion_4 = $request->input('cls_opcion_2_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_3_Evaluacion_1 = $request->input('cls_opcion_3_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_3_Evaluacion_2 = $request->input('cls_opcion_3_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_3_Evaluacion_3 = $request->input('cls_opcion_3_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_3_Evaluacion_4 = $request->input('cls_opcion_3_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_4_Evaluacion_1 = $request->input('cls_opcion_4_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_4_Evaluacion_2 = $request->input('cls_opcion_4_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_4_Evaluacion_3 = $request->input('cls_opcion_4_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_4_Evaluacion_4 = $request->input('cls_opcion_4_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_5_Evaluacion_1 = $request->input('cls_opcion_5_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_5_Evaluacion_2 = $request->input('cls_opcion_5_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_5_Evaluacion_3 = $request->input('cls_opcion_5_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_5_Evaluacion_4 = $request->input('cls_opcion_5_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_6_Evaluacion_1 = $request->input('cls_opcion_6_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_6_Evaluacion_2 = $request->input('cls_opcion_6_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_6_Evaluacion_3 = $request->input('cls_opcion_6_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_6_Evaluacion_4 = $request->input('cls_opcion_6_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_7_Evaluacion_1 = $request->input('cls_opcion_7_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_7_Evaluacion_2 = $request->input('cls_opcion_7_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_7_Evaluacion_3 = $request->input('cls_opcion_7_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_7_Evaluacion_4 = $request->input('cls_opcion_7_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_8_Evaluacion_1 = $request->input('cls_opcion_8_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_8_Evaluacion_2 = $request->input('cls_opcion_8_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_8_Evaluacion_3 = $request->input('cls_opcion_8_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_8_Evaluacion_4 = $request->input('cls_opcion_8_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_9_Evaluacion_1 = $request->input('cls_opcion_9_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_9_Evaluacion_2 = $request->input('cls_opcion_9_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_9_Evaluacion_3 = $request->input('cls_opcion_9_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_9_Evaluacion_4 = $request->input('cls_opcion_9_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_10_Evaluacion_1 = $request->input('cls_opcion_10_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_10_Evaluacion_2 = $request->input('cls_opcion_10_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_10_Evaluacion_3 = $request->input('cls_opcion_10_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_10_Evaluacion_4 = $request->input('cls_opcion_10_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_11_Evaluacion_1 = $request->input('cls_opcion_11_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_11_Evaluacion_2 = $request->input('cls_opcion_11_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_11_Evaluacion_3 = $request->input('cls_opcion_11_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_11_Evaluacion_4 = $request->input('cls_opcion_11_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_12_Evaluacion_1 = $request->input('cls_opcion_12_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_12_Evaluacion_2 = $request->input('cls_opcion_12_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_12_Evaluacion_3 = $request->input('cls_opcion_12_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_12_Evaluacion_4 = $request->input('cls_opcion_12_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_13_Evaluacion_1 = $request->input('cls_opcion_13_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_13_Evaluacion_2 = $request->input('cls_opcion_13_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_13_Evaluacion_3 = $request->input('cls_opcion_13_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_13_Evaluacion_4 = $request->input('cls_opcion_13_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_14_Evaluacion_1 = $request->input('cls_opcion_14_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_14_Evaluacion_2 = $request->input('cls_opcion_14_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_14_Evaluacion_3 = $request->input('cls_opcion_14_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_14_Evaluacion_4 = $request->input('cls_opcion_14_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_15_Evaluacion_1 = $request->input('cls_opcion_15_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_15_Evaluacion_2 = $request->input('cls_opcion_15_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_15_Evaluacion_3 = $request->input('cls_opcion_15_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_15_Evaluacion_4 = $request->input('cls_opcion_15_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_16_Evaluacion_1 = $request->input('cls_opcion_16_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_16_Evaluacion_2 = $request->input('cls_opcion_16_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_16_Evaluacion_3 = $request->input('cls_opcion_16_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_16_Evaluacion_4 = $request->input('cls_opcion_16_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_17_Evaluacion_1 = $request->input('cls_opcion_17_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_17_Evaluacion_2 = $request->input('cls_opcion_17_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_17_Evaluacion_3 = $request->input('cls_opcion_17_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_17_Evaluacion_4 = $request->input('cls_opcion_17_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_18_Evaluacion_1 = $request->input('cls_opcion_18_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_18_Evaluacion_2 = $request->input('cls_opcion_18_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_18_Evaluacion_3 = $request->input('cls_opcion_18_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_18_Evaluacion_4 = $request->input('cls_opcion_18_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_19_Evaluacion_1 = $request->input('cls_opcion_19_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_19_Evaluacion_2 = $request->input('cls_opcion_19_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_19_Evaluacion_3 = $request->input('cls_opcion_19_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_19_Evaluacion_4 = $request->input('cls_opcion_19_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_20_Evaluacion_1 = $request->input('cls_opcion_20_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_20_Evaluacion_2 = $request->input('cls_opcion_20_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_20_Evaluacion_3 = $request->input('cls_opcion_20_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_20_Evaluacion_4 = $request->input('cls_opcion_20_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_21_Evaluacion_1 = $request->input('cls_opcion_21_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_21_Evaluacion_2 = $request->input('cls_opcion_21_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_21_Evaluacion_3 = $request->input('cls_opcion_21_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_21_Evaluacion_4 = $request->input('cls_opcion_21_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_22_Evaluacion_1 = $request->input('cls_opcion_22_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_22_Evaluacion_2 = $request->input('cls_opcion_22_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_22_Evaluacion_3 = $request->input('cls_opcion_22_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_22_Evaluacion_4 = $request->input('cls_opcion_22_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_23_Evaluacion_1 = $request->input('cls_opcion_23_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_23_Evaluacion_2 = $request->input('cls_opcion_23_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_23_Evaluacion_3 = $request->input('cls_opcion_23_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_23_Evaluacion_4 = $request->input('cls_opcion_23_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_24_Evaluacion_1 = $request->input('cls_opcion_24_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_24_Evaluacion_2 = $request->input('cls_opcion_24_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_24_Evaluacion_3 = $request->input('cls_opcion_24_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_24_Evaluacion_4 = $request->input('cls_opcion_24_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_25_Evaluacion_1 = $request->input('cls_opcion_25_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_25_Evaluacion_2 = $request->input('cls_opcion_25_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_25_Evaluacion_3 = $request->input('cls_opcion_25_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_25_Evaluacion_4 = $request->input('cls_opcion_25_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_26_Evaluacion_1 = $request->input('cls_opcion_26_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_26_Evaluacion_2 = $request->input('cls_opcion_26_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_26_Evaluacion_3 = $request->input('cls_opcion_26_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_26_Evaluacion_4 = $request->input('cls_opcion_26_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_27_Evaluacion_1 = $request->input('cls_opcion_27_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_27_Evaluacion_2 = $request->input('cls_opcion_27_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_27_Evaluacion_3 = $request->input('cls_opcion_27_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_27_Evaluacion_4 = $request->input('cls_opcion_27_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_28_Evaluacion_1 = $request->input('cls_opcion_28_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_28_Evaluacion_2 = $request->input('cls_opcion_28_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_28_Evaluacion_3 = $request->input('cls_opcion_28_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_28_Evaluacion_4 = $request->input('cls_opcion_28_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_29_Evaluacion_1 = $request->input('cls_opcion_29_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_29_Evaluacion_2 = $request->input('cls_opcion_29_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_29_Evaluacion_3 = $request->input('cls_opcion_29_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_29_Evaluacion_4 = $request->input('cls_opcion_29_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_30_Evaluacion_1 = $request->input('cls_opcion_30_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_30_Evaluacion_2 = $request->input('cls_opcion_30_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_30_Evaluacion_3 = $request->input('cls_opcion_30_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_30_Evaluacion_4 = $request->input('cls_opcion_30_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_31_Evaluacion_1 = $request->input('cls_opcion_31_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_31_Evaluacion_2 = $request->input('cls_opcion_31_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_31_Evaluacion_3 = $request->input('cls_opcion_31_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_31_Evaluacion_4 = $request->input('cls_opcion_31_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_32_Evaluacion_1 = $request->input('cls_opcion_32_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_32_Evaluacion_2 = $request->input('cls_opcion_32_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_32_Evaluacion_3 = $request->input('cls_opcion_32_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_32_Evaluacion_4 = $request->input('cls_opcion_32_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_33_Evaluacion_1 = $request->input('cls_opcion_33_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_33_Evaluacion_2 = $request->input('cls_opcion_33_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_33_Evaluacion_3 = $request->input('cls_opcion_33_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_33_Evaluacion_4 = $request->input('cls_opcion_33_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_34_Evaluacion_1 = $request->input('cls_opcion_34_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_34_Evaluacion_2 = $request->input('cls_opcion_34_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_34_Evaluacion_3 = $request->input('cls_opcion_34_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_34_Evaluacion_4 = $request->input('cls_opcion_34_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_35_Evaluacion_1 = $request->input('cls_opcion_35_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_35_Evaluacion_2 = $request->input('cls_opcion_35_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_35_Evaluacion_3 = $request->input('cls_opcion_35_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_35_Evaluacion_4 = $request->input('cls_opcion_35_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_36_Evaluacion_1 = $request->input('cls_opcion_36_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_36_Evaluacion_2 = $request->input('cls_opcion_36_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_36_Evaluacion_3 = $request->input('cls_opcion_36_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_36_Evaluacion_4 = $request->input('cls_opcion_36_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_37_Evaluacion_1 = $request->input('cls_opcion_37_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_37_Evaluacion_2 = $request->input('cls_opcion_37_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_37_Evaluacion_3 = $request->input('cls_opcion_37_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_37_Evaluacion_4 = $request->input('cls_opcion_37_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_38_Evaluacion_1 = $request->input('cls_opcion_38_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_38_Evaluacion_2 = $request->input('cls_opcion_38_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_38_Evaluacion_3 = $request->input('cls_opcion_38_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_38_Evaluacion_4 = $request->input('cls_opcion_38_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_39_Evaluacion_1 = $request->input('cls_opcion_39_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_39_Evaluacion_2 = $request->input('cls_opcion_39_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_39_Evaluacion_3 = $request->input('cls_opcion_39_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_39_Evaluacion_4 = $request->input('cls_opcion_39_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_40_Evaluacion_1 = $request->input('cls_opcion_40_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_40_Evaluacion_2 = $request->input('cls_opcion_40_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_40_Evaluacion_3 = $request->input('cls_opcion_40_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_40_Evaluacion_4 = $request->input('cls_opcion_40_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_41_Evaluacion_1 = $request->input('cls_opcion_41_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_41_Evaluacion_2 = $request->input('cls_opcion_41_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_41_Evaluacion_3 = $request->input('cls_opcion_41_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_41_Evaluacion_4 = $request->input('cls_opcion_41_Evaluacion_4', 'No');

        $registroCheckListSeguridad->cls_opcion_42_Evaluacion_1 = $request->input('cls_opcion_42_Evaluacion_1', 'No');
        $registroCheckListSeguridad->cls_opcion_42_Evaluacion_2 = $request->input('cls_opcion_42_Evaluacion_2', 'No');
        $registroCheckListSeguridad->cls_opcion_42_Evaluacion_3 = $request->input('cls_opcion_42_Evaluacion_3', 'No');
        $registroCheckListSeguridad->cls_opcion_42_Evaluacion_4 = $request->input('cls_opcion_42_Evaluacion_4', 'No');

        if ($request->input('SeleccionadosSeguridadSi') == '') {
            $registroCheckListSeguridad->SeleccionadosSeguridadSi = "168";
        } else {
            $registroCheckListSeguridad->SeleccionadosSeguridadSi = $request->input('SeleccionadosSeguridadSi');
        }

        if ($request->input('SeleccionadosSeguridadNo') == '') {
            $registroCheckListSeguridad->SeleccionadosSeguridadNo = "0";
        } else {
            $registroCheckListSeguridad->SeleccionadosSeguridadNo = $request->input('SeleccionadosSeguridadNo');
        }

        $registroCheckListSeguridad->cls_Supervisor_Firma = $request->input('cls_Supervisor_Firma');
        $registroCheckListSeguridad->cls_Encargado_Firma = $request->input('cls_Encargado_Firma');
        $registroCheckListSeguridad->cls_Operador_Firma = $request->input('cls_Operador_Firma');
        $registroCheckListSeguridad->cls_Gestion_Firma = $request->input('cls_Gestion_Firma');

        $registroCheckListSeguridad->save();

        return redirect('checkListSeguridad')->with('mensaje', 'CheckList creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroCheckListSeguridad  $registroCheckListSeguridad
     * @return \Illuminate\Http\Response
     */
    public function show(registroCheckListSeguridad $registroCheckListSeguridad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroCheckListSeguridad  $registroCheckListSeguridad
     * @return \Illuminate\Http\Response
     */
    public function edit(registroCheckListSeguridad $registroCheckListSeguridad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroCheckListSeguridad  $registroCheckListSeguridad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroCheckListSeguridad $registroCheckListSeguridad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroCheckListSeguridad  $registroCheckListSeguridad
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroCheckListSeguridad $registroCheckListSeguridad)
    {
        //
    }
}
