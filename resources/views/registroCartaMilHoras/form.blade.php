@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="encabezado">Información General</h3>
    <div class="form">
        <div class="row mt-2">
            <div class="form-group col">
                <label for="mil_Nombre"> <strong> Equipo: </strong> </label>
                <input type="text" class="form-control" value="Elevador" name="mil_Equipo" id="mil_Equipo">
            </div>
            <div class="form-group col">
                <label for="mil_Num"> <strong> Marca: </strong> </label>
                <input type="text" class="form-control" value="ALIMAK" name="mil_Marca" id="mil_Marca">
            </div>
            <div class="form-group col">
                <label for="mil_Fecha"> <strong> Núm. Eco: </strong> </label>
                <input type="text" class="form-control" value="N/E" name="mil_NumE" id="mil_NumE">
            </div>
            <div class="form-group col">
                <label for="mil_Fecha"> <strong> Fecha: </strong> </label>
                <input type="date" placeholder="" class="form-control" name="mil_Fecha" id="mil_Fecha">
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col">
                <label for="mil_Nombre"> <strong> Tipo de Mant: </strong> </label>
                <input type="text" class="form-control" value="40 Hrs" name="mil_Tipo" id="mil_Tipo">
            </div>
            <div class="form-group col">
                <label for="mil_Num"> <strong> Horómetro: </strong> </label>
                <input type="number" class="form-control" name="mil_Horo" id="mil_Horo">
            </div>
            <div class="form-group col">
                <label for="mil_Fecha"> <strong> Horario: </strong> </label>
                <input type="time" class="form-control" name="mil_Horario" id="mil_Horario">
            </div>
            <div class="form-group col">
                <label for="mil_Turno"> <strong> Turno: </strong> </label>
                <select class="form-select" aria-label="Default select example" name="mil_Turno" id="mil_Turno" required>
                    <option disabled selected>Seleccione Turno</option>
                    <option value="Primera">Primera</option>
                    <option value="Segunda">Segunda</option>
                </select>
            </div>
        </div>
    </div>

    <style>
        .radio {
            background: #000;
            padding: 4px;
            width: 50%;
            height: 40px;
            border-radius: 3px;
            box-shadow: inset 0 0 0 3px rgb(35 33 45 / 30%), 0 0 0 3px rgb(185 185 185 / 30%);
            position: relative;
        }

        .radio input {
            width: 45%;
            height: 100%;
            appearance: none;
            outline: none;
            cursor: pointer;
            border-radius: 2px;
            padding: 4px 8px;
            background: #454857;
            color: #bdbdbdbd;
            font-size: 14px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            transition: all 100ms linear;
        }
    </style>

    <table class="tabla tablaUsuarios round_table">
        <thead class="">
            <tr>
                <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 5%;">No.</th>
                <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Elemento</th>
                <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 25%;">Descripción de la actividad </th>
                <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 5%;">Realizado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="3">1</td>
                <td rowspan="3">Verificación a el
                    acoplamiento</td>
                <td colspan="">Verificación de la detección de vibraciones.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_1_1" id="mil_1_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Verificación de la detección de ruidos. </td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_1_2" id="mil_1_2" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Verificación del juego entre motores y reductores, el ajuste debe de efectuarse por personal autorizado.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_1_3" id="mil_1_3" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">2</td>
                <td rowspan="1">Verificación a el cableado
                    eléctrico.</td>
                <td colspan="">Verificar los cables, prensaestopas y conexiones del exterior del armario eléctrico en
                    su totalidad.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_2_0" id="mil_1_0" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">3</td>
                <td rowspan="1">Verificación del Relé térmico
                    del guardamotor</td>
                <td colspan="">Asegurarse de que la tensión nominal marcada corresponde al de (de los) motores.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_3_1" id="mil_3_1" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="1">4</td>
                <td rowspan="1">Detección de deformaciones
                    y daños mecánicos.</td>
                <td colspan="">Inspeccionar visualmente la instalación en su totalidad para detectar deformaciones
                    o daños mecánicos en secciones del mástil, arriostramientos, puertas, barandillas
                    protectoras, suelo, las inspecciones deben ser efectuadas por personal de
                    mantenimiento autorizado.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_4_1" id="mil_4_1" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="1">5</td>
                <td rowspan="1">Detección de Corrosión y
                    desgaste.</td>
                <td colspan="">Detectar la presencia de corrosión y desgaste en el cojinete de carga del mástil de
                    elevación / los componentes de absorción de fuerzas, en caso de ser necesario
                    utilizar equipo de medición ultrasónico, referencia Manual de operación y
                    mantenimiento sección 3.13 Tubos del mástil.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_5_1" id="mil_5_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">6</td>
                <td rowspan="1">Verificación del mástil.</td>
                <td colspan="">Verificar que los pernos de unión entre las secciones, los tornillos de fijación de las
                    cremalleras los pernos de unión entre el mástil y el marco base; referencia Manual
                    de operación y mantenimiento sección 2. Par de apriete.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_6_1" id="mil_6_1" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="1">7</td>
                <td rowspan="1">Verificación de las guías
                    de cable colgante.
                </td>
                <td colspan="">Verificar de forma manual la fijación de las guías de cable, la funcionalidad e
                    instalación en el mástil en relación con el brazo de soporte del cable , el par de
                    apriete a 22 Nm. La verificación se realizará en un 10% de las guías de cable, en
                    caso de que se detecte alguna desviación, amplíe la comprobación a todas las guías
                    de cable.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_7_1" id="mil_7_1" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="3">8</td>
                <td rowspan="3">Verificación del freno
                    centrifugo.
                </td>
                <td colspan="">Verificar el cumplimiento a los parámetros establecidos para el freno centrifugo y
                    forros en el Manual de operación y mantenimiento sección E28.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_8_1" id="mil_8_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">a) Reemplazar el forro de freno si el desgaste ha disminuido su grosor hasta 3 mm</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_8_2" id="mil_8_2" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">b) Engrasar el dispositivo de control con Grasa Aeroshell 6 al
                    volver a montar.
                </td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_8_3" id="mil_8_3" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="1">9</td>
                <td rowspan="1">Verificación del dispositivo
                    de bloqueo en cabinas
                    hidráulicas.
                </td>
                <td colspan="">Sustitución de filtro de la ventilación de la unidad de alimentación según las
                    característica de color.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_9_1" id="mil_9_1" value="Si">
                    </div>
                </td>

            </tr>

            <tr>
                <td rowspan="1">10</td>
                <td rowspan="1">Verificación a paneles de
                    control.
                </td>
                <td colspan="">Verificar el estado físico, de fijación y de colocación de los componentes interno
                    externo en su totalidad.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="mil_10_1" id="mil_10_1" value="Si">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>


    <div class="form">
        <div class="row mt-2">
            <div class="form-group col">
                <label for="observaciones">Observaciones:</label>
                <textarea class="form-control" name="observaciones_Form" id="observaciones_Form" rows="5" required></textarea>
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col">
                <label>Operador: </label>
                <select class="form-select" aria-label="Default select example" name="milOperadorForm" id="milOperadorForm" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                    <option value="Tomas Huerta Palacios">Tomas Huerta Palacios</option>
                    <option value="Rito Valtierra Ortiz">Rito Valtierra Ortiz</option>
                    <option value="José Arturo Guevara De Loera">José Arturo Guevara De Loera</option>
                    <option value="Ruben Alvarez De Loera">Ruben Alvarez De Loera</option>
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                </select>
            </div>
            <div class="form-group col">
                <label>Verificador: </label>
                <select class="form-select" aria-label="Default select example" name="milVerificadorForm" id="milVerificadorForm" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                    <option value="Tomas Huerta Palacios">Tomas Huerta Palacios</option>
                    <option value="Rito Valtierra Ortiz">Rito Valtierra Ortiz</option>
                    <option value="José Arturo Guevara De Loera">José Arturo Guevara De Loera</option>
                    <option value="Ruben Alvarez De Loera">Ruben Alvarez De Loera</option>
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                </select>

            </div>
            <div class="form-group col">
                <label>Encargado: </label>
                <select class="form-select" aria-label="Default select example" name="milEncargadoForm" id="milEncargadoForm" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                    <option value="Tomas Huerta Palacios">Tomas Huerta Palacios</option>
                    <option value="Rito Valtierra Ortiz">Rito Valtierra Ortiz</option>
                    <option value="José Arturo Guevara De Loera">José Arturo Guevara De Loera</option>
                    <option value="Ruben Alvarez De Loera">Ruben Alvarez De Loera</option>
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                </select>
            </div>
        </div>
    </div>

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

        .btn1::before {
            width: 0%;
            height: 100%;
            color: black;
        }

        .btn1:hover::before {
            width: 100%;
            color: black;
        }
    </style>

    <div class="form">
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <br>
                    <div class="middle">
                        <button style="cursor: pointer" class="textEspacing btn btn1">{{ __('Guardar Carta     ') }}<i class="fas fa-plus-circle"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@include('layouts.footer')
@endsection