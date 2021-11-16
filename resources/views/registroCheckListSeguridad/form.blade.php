@extends('layouts.app')

@section('content')
<style>
    .btn {
        position: relative;
        display: block;
        color: black;
        font-size: 14px;
        font-family: "Arial";
        text-decoration: none;
        margin: 30px 0;
        border: 2px solid black;
        padding: 14px 60px;
        /* text-transform: uppercase; */
        overflow: hidden;
        transition: 1s all ease;
        border-radius: 3%;
    }

    .btn::before {
        background: #FF771F;
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
        transition: all 0.6s ease;
        border-radius: 3%;
        color: black;
    }

    .btnGuardar1::before {
        width: 0%;
        height: 100%;
        color: black;
    }

    .btnGuardar1:hover::before {
        width: 100%;
        color: black;
    }
</style>

<div class="container">

    <h3 class="encabezado">Operador</h3>

    <div class="form">
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <label for="cls_Activadad">Actividad: </label>
                    <input type="text" placeholder="Actividad" class="form-control" name="cls_Activadad" id="cls_Activadad">
                </div>
                <div class="form-group col">
                    <label for="cls_Depto">Área/Depto: </label>
                    <input type="text" placeholder="" class="form-control" name="cls_Depto" id="cls_Depto">
                </div>
                <div class="form-group col">
                    <label for="cls_Ubicacion">Ubicación: </label>
                    <input type="text" placeholder="" class="form-control" name="cls_Ubicacion" id="cls_Ubicacion">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <label>Turno: </label>
                    <select class="form-select" aria-label="Default select example" name="cls_Turno" id="cls_Turno" required>
                        <option disabled selected>Seleccione Turno</option>
                        <option value="Primera">Primera</option>
                        <option value="Segunda">Segunda</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="cls_Horario">Horario: </label>
                    <input type="time" placeholder="" class="form-control" name="cls_Horario" id="cls_Horario">
                </div>
                <div class="form-group col">
                    <label for="cls_Fecha">Fecha: </label>
                    <input type="date" placeholder="" class="form-control" name="cls_Fecha" id="cls_Fecha">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <label for="cls_Verificador">Verificador: </label>
                    <select class="form-select" aria-label="Default select example" name="cls_Verificador" id="cls_Verificador" required>
                        <option selected>Seleccione Opcion</option>
                        <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                        <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                        <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="cls_Categoria">Categoría: </label>
                    <input type="text" placeholder="" class="form-control" name="cls_Categoria" id="cls_Categoria">
                </div>
                <div class="form-group col">
                    <label>Encargado de área: </label>
                    <select class="form-select" aria-label="Default select example" name="cls_Encargado" id="cls_Encargado" required>
                        <option selected>Seleccione Opcion</option>
                        <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                        <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                        <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                    </select>
                </div>
            </div>
        </div>


        <style>
            label {
                font-weight: bold;
            }

            table {
                /* border-collapse: collapse; */
                box-shadow: 0 5px 10px #000;
                background-color: white;
                text-align: left;
                overflow: hidden;
                margin: auto;

            }

            .round_table {
                border-collapse: separate;
                border-spacing: 1;
                border: solid black 1px;
                border-radius: 5px;
                -moz-border-radius: 10px;
                -webkit-border-radius: 5px;
            }

            thead {
                box-shadow: 0 5px 10px #e1e5ee;
            }

            th {
                padding: 1rem 2rem;
                text-transform: uppercase;
                letter-spacing: 0.1rem;
                font-size: 1rem;
                font-weight: 900;
            }

            td {
                padding: 1rem 2rem;
            }

            tr:nth-child(even) {
                background-color: #f4f6fb;
            }

            tr:hover {
                background-color: rgba(255, 119, 31, 0.3);
            }
        </style>

        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <table class="tabla round_table" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td rowspan="2" style="width: 35%;">Componentes sujetos a inspección</td>
                            </tr>
                            <!-- <tr>
                                <td colspan="" >
                                    <label for="numeroOperador_Form">Área: </label>
                                    <input type="text" placeholder="000" class="form-control" name="cls_opcion_1_Area_1" id="cls_opcion_1_Area_1">
                                </td>
                                <td colspan="" >
                                    <label for="numeroOperador_Form">Área: </label>
                                    <input type="text" placeholder="000" class="form-control" name="cls_opcion_2_Area_2" id="cls_opcion_2_Area_2">
                                </td>
                                <td colspan="" >
                                    <label for="numeroOperador_Form">Área: </label>
                                    <input type="text" placeholder="000" class="form-control" name="cls_opcion_3_Area_3" id="cls_opcion_3_Area_3">
                                </td>
                                <td colspan="" >
                                    <label for="numeroOperador_Form">Área: </label>
                                    <input type="text" placeholder="000" class="form-control" name="cls_opcion_4_Area_4" id="cls_opcion_4_Area_4">
                                </td>
                            </tr> -->
                            <tr>
                                <td colspan="" >
                                    <label for="numeroOperador_Form">Ubic: </label>
                                    <select class="form-select" aria-label="Default select example" name="cls_opcion_1_Ubic_1" id="cls_opcion_1_Ubic_1" required>
                                        <option selected>Seleccione Ubic</option>
                                        <option value="155W">155W-VE</option>
                                        <option value="270W">270W-VE</option>
                                        <option value="350W">350W-VE</option>
                                        <option value="390W">390W-VE</option>
                                        <option value="530W">530W-NS</option>
                                        <option value="600W">600W-NS</option>
                                        <option value="695W">695W-NS</option>
                                    </select>
                                </td>
                                <td colspan="" >
                                    <label for="numeroOperador_Form">Ubic: </label>
                                    <select class="form-select" aria-label="Default select example" name="cls_opcion_2_Ubic_2" id="cls_opcion_2_Ubic_2" required>
                                        <option selected>Seleccione Ubic</option>
                                        <option value="155W">155W-VE</option>
                                        <option value="270W">270W-VE</option>
                                        <option value="350W">350W-VE</option>
                                        <option value="390W">390W-VE</option>
                                        <option value="530W">530W-NS</option>
                                        <option value="600W">600W-NS</option>
                                        <option value="695W">695W-NS</option>
                                    </select>
                                </td>
                                <td colspan="" >
                                    <label for="numeroOperador_Form">Ubic: </label>
                                    <select class="form-select" aria-label="Default select example" name="cls_opcion_3_Ubic_3" id="cls_opcion_3_Ubic_3" required>
                                        <option selected>Seleccione Ubic</option>
                                        <option value="155W">155W-VE</option>
                                        <option value="270W">270W-VE</option>
                                        <option value="350W">350W-VE</option>
                                        <option value="390W">390W-VE</option>
                                        <option value="530W">530W-NS</option>
                                        <option value="600W">600W-NS</option>
                                        <option value="695W">695W-NS</option>
                                    </select>
                                </td>
                                <td colspan="" >
                                    <label for="numeroOperador_Form">Ubic: </label>
                                    <select class="form-select" aria-label="Default select example" name="cls_opcion_4_Ubic_4" id="cls_opcion_4_Ubic_4" required>
                                        <option selected>Seleccione Ubic</option>
                                        <option value="155W">155W-VE</option>
                                        <option value="270W">270W-VE</option>
                                        <option value="350W">350W-VE</option>
                                        <option value="390W">390W-VE</option>
                                        <option value="530W">530W-NS</option>
                                        <option value="600W">600W-NS</option>
                                        <option value="695W">695W-NS</option>
                                    </select>
                                </td>
                            </tr>
                            <!-- c s_opcion_1_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Programa de realización de orden, limpieza y sanitización de las áreas conocido por el colaborador.</td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="o" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_1_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_1_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_1_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_1_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_1_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_1_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_1_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_2_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Informacion de dosificacion de productos de <strong>limpieza</strong>/<strong>sanitización</strong> seguros conocido por el colaborador. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_2_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_2_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_2_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_2_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_2_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_2_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_2_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_2_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_3_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Conocimiento e interpretación adecuada de las etiquetas HSD de productos relacionados con la actividad.</td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_3_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_3_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_3_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_3_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_3_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_3_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_3_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_3_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_4_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Señalización de medidas de seguridad sanitaria. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_4_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_4_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_4_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_4_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_4_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_4_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_4_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_4_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_5_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Señalización de orden y limpieza obligatoria . </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_5_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_5_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_5_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_5_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_5_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_5_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_5_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_5_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_6_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Señalización de separación de residuos. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_6_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_6_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_6_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_6_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_6_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_6_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_6_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_6_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_7_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Señalización de riesgo eléctrico, restricciones a rociar líquido y agua. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_7_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_7_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_7_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_7_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_7_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_7_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_7_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_7_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_8_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Señalización de distancia sanitaria y restrictiva en áreas de espera. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_8_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_8_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_8_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_8_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_8_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_8_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_8_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_8_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_9_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Rociadores de productos de desinfección etiquetados conforme el SGA.</td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_9_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_9_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_9_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_9_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_9_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_9_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_9_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_9_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_10_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Rociadores de productos de sanitización etiquetados conforme el SGA. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_10_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_10_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_10_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_10_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_10_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_10_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_10_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_10_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_11_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Paños limpios, en buen estado y suficientes. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_11_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_11_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_11_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_11_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_11_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_11_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_11_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_11_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_12_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Escobas limpias, en buen estado. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_12_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_12_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_12_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_12_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_12_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_12_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_12_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_12_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_13_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Trapeador, en buen estado. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_13_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_13_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_13_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_13_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_13_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_13_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_13_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_13_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_14_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Cubeta en condiciones estructurales adecuadas. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_14_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_14_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_14_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_14_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_14_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_14_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_14_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_14_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_15_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Lugar adecuado para el almacenamiento de los equipos de limpieza en área. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_15_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_15_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_15_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_15_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_15_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_15_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_15_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_15_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_16_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Guantes de látex para limpieza en condiciones adecuadas. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_16_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_16_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_16_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_16_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_16_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_16_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_16_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_16_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_17_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Protección ocular obligatorias al limpiar (adicional al equipo básico y especifico) . </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_17_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_17_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_17_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_17_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_17_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_17_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_17_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_17_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>
                            <!-- c s_opcion_18_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Protección respiratoria obligatorias al limpiar (adicional al equipo básico y especifico) . </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_18_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_18_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_18_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_18_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_18_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_18_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_18_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_18_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_19_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Gafas de protección personal claras, obligatorias al limpiar (adicional al equipo básico y especifico) . </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_19_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_19_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_19_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_19_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_19_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_19_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_19_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_19_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_20_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Contenedores de residuos sólidos urbanos. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_20_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_20_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_20_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_20_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_20_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_20_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_20_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_20_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_21_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Contenedor de residuos orgánicos. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_21_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_21_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_21_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_21_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_21_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_21_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_21_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_21_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_22_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Contenedor de residuos de plástico PET. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_22_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_22_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_22_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_22_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_22_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_22_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_22_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_22_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_23_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Contenedor de cartón, papel. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_23_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_23_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_23_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_23_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_23_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_23_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_23_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_23_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_24_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Contenedor de residuos peligrosos. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_24_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_24_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_24_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_24_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_24_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_24_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_24_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_24_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_25_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Superficies limpias. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_25_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_25_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_25_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_25_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_25_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_25_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_25_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_25_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_26_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Pisos limpios. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_26_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_26_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_26_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_26_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_26_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_26_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_26_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_26_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_27_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Paredes limpias. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_27_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_27_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_27_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_27_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_27_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_27_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_27_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_27_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_28_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Mobiliario del área limpio sin daño. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_28_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_28_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_28_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_28_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_28_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_28_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_28_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_28_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_29_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Vidrios, cristales, espejos limpios. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_29_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_29_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_29_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_29_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_29_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_29_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_29_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_29_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_30_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Sin elementos u objetos sucios acumulados. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_30_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_30_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_30_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_30_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_30_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_30_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_30_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_30_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_31_Evaluacion -->
                            <tr>
                                <td style="width: 35%;"><strong>Pasillos</strong>/<strong>áreas</strong> de circulación libres de obstáculos. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_31_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_31_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_31_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_31_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_31_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_31_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_31_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_31_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_32_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Aplicación de <strong>sanitizante</strong>/<strong>desinfectante</strong> en superficies de contacto humano, continuo. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_32_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_32_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_32_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_32_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_32_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_32_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_32_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_32_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_33_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Tecnica de limpieza a paño humedo ( casi seco) en superficies delicadas. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_33_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_33_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_33_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_33_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_33_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_33_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_33_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_33_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_34_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Tecnica de limpieza de fricción en superficie con suciedad acumulada. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_34_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_34_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_34_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_34_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_34_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_34_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_34_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_34_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_35_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Separación de elementos por características iguales refiriendo, equipo, herramientas y materiales. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_35_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_35_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_35_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_35_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_35_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_35_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_35_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_35_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_36_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Separación de elementos por características iguales en bahías señalizadas y delimitadas. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_36_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_36_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_36_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_36_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_36_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_36_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_36_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_36_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_37_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Separación de residuos sólidos urbanos . </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_37_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_37_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_37_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_37_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_37_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_37_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_37_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_37_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_38_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Separación de residuos orgánicos . </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_38_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_38_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_38_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_38_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_38_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_38_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_38_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_38_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_39_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Separación de residuos de plástico PET. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_39_valuacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_39_valuacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_39_valuacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_39_valuacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_39_valuacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_39_valuacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_39_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_39_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_40_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Separación de residuos peligosos. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_40_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_40_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_40_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_40_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_40_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_40_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_40_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_40_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_41_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Campaña de orden y limpieza ACSMA del mes vigente. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_41_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_41_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_41_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_41_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_41_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_41_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_41_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_41_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                            <!-- c s_opcion_42_Evaluacion -->
                            <tr>
                                <td style="width: 35%;">Campaña de Medioambiente ACSMA del mes vigente. </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_42_Evaluacion_1" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_42_Evaluacion_1" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_42_Evaluacion_2" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_42_Evaluacion_2" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_42_Evaluacion_3" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_42_Evaluacion_3" value="No">
                                    </div>
                                </td>
                                <td colspan="" style="text-align: center; font-weight: bold;">
                                    <div class="radio">
                                        <input label="Si" type="radio" id="cls_opcion_S" name="cls_opcion_42_Evaluacion_4" value="Si" checked>
                                        <input label="No" type="radio" id="cls_opcion_N" name="cls_opcion_42_Evaluacion_4" value="No">
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="/scripts/snippet-javascript-console.min.js?v=1"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script type="text/javascript">
            $('input[type="radio"]').change(function() {
                let numSi = $('#cls_opcion_S:checked').length;
                let numNo = $('#cls_opcion_N:checked').length;

                $("#SeleccionadosSeguridadSi").val(numSi);
                $("#SeleccionadosSeguridadNo").val(numNo);
            });
        </script>

        <div class="row mt-2" style="display: none;">
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <input type="text" id="SeleccionadosSeguridadSi" name="SeleccionadosProceso">
                    </div>
                    <div class="divCheckList form-group col-10">
                        <input type="text" id="SeleccionadosSeguridadNo" name="SeleccionadosProceso">
                    </div>
                </div>
            </div>
        </div>

        <div class="form">
            <div class="row mt">
                <div class="form-group col">
                    <label>Supervisor que elabora: </label>
                    <select class="form-select" aria-label="Default select example" name="cls_Supervisor_Firma" id="cls_Supervisor_Firma" required>
                        <option selected>Seleccione Opcion</option>
                        <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                        <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                        <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                        <option value="Adán Eliutt Ruíz Morán">Adán Eliutt Ruíz Morán</option>
                        <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option>
                        <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                        <option value="Armando Estrada González">Armando Estrada González</option>
                        <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Encargado de area: </label>
                    <select class="form-select" aria-label="Default select example" name="cls_Encargado_Firma" id="cls_Encargado_Firma" required>
                        <option selected>Seleccione Opcion</option>
                        <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                        <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                        <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                        <option value="Adán Eliutt Ruíz Morán">Adán Eliutt Ruíz Morán</option>
                        <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option>
                        <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                        <option value="Armando Estrada González">Armando Estrada González</option>
                        <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Operador: </label>
                    <select class="form-select" aria-label="Default select example" name="cls_Operador_Firma" id="cls_Operador_Firma" required>
                        <option selected>Seleccione Opcion</option>
                        <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                        <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                        <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                        <option value="Adán Eliutt Ruíz Morán">Adán Eliutt Ruíz Morán</option>
                        <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option>
                        <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                        <option value="Armando Estrada González">Armando Estrada González</option>
                        <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label>Sistema de Gestión Integral: </label>
                    <select class="form-select" aria-label="Default select example" name="cls_Gestion_Firma" id="cls_Gestion_Firma" required>
                        <option selected>Seleccione Opcion</option>
                        <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                        <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                        <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                        <option value="Adán Eliutt Ruíz Morán">Adán Eliutt Ruíz Morán</option>
                        <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option>
                        <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                        <option value="Armando Estrada González">Armando Estrada González</option>
                        <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form">
            <div class="form-group">
                <div class="row mt-2">
                    <div class="form-group col">
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="middle">
                            <button style="cursor: pointer" class="textEspacing btn btnGuardar1">{{ __('Guardar Registro     ') }}<i class="fas fa-plus-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection