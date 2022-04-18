@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="encabezado">Información General</h3>
    <div class="form">
        <div class="row mt-2">
            <div class="form-group col">
                <label for="cuarenta_Nombre"> <strong> Equipo: </strong> </label>
                <input type="text" class="form-control" value="Elevador" name="cuarenta_Equipo" id="cuarenta_Equipo">
            </div>
            <div class="form-group col">
                <label for="cuarenta_Num"> <strong> Marca: </strong> </label>
                <input type="text" class="form-control" value="ALIMAK" name="cuarenta_Marca" id="cuarenta_Marca">
            </div>
            <div class="form-group col">
                <label for="cuarenta_Fecha"> <strong> Núm. Eco: </strong> </label>
                <input type="text" class="form-control" value="N/E" name="cuarenta_NumE" id="cuarenta_NumE">
            </div>
            <div class="form-group col">
                <label for="cuarenta_Fecha"> <strong> Fecha: </strong> </label>
                <input type="date" placeholder="" class="form-control" name="cuarenta_Fecha" id="cuarenta_Fecha">
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col">
                <label for="cuarenta_Nombre"> <strong> Tipo de Mant: </strong> </label>
                <input type="text" class="form-control" value="40 Hrs" name="cuarenta_Tipo" id="cuarenta_Tipo">
            </div>
            <div class="form-group col">
                <label for="cuarenta_Num"> <strong> Horómetro: </strong> </label>
                <input type="number" class="form-control" name="cuarenta_Horo" id="cuarenta_Horo">
            </div>
            <div class="form-group col">
                <label for="cuarenta_Fecha"> <strong> Horario: </strong> </label>
                <input type="time" class="form-control" name="cuarenta_Horario" id="cuarenta_Horario">
            </div>
            <div class="form-group col">
                <label for="cuarenta_Turno"> <strong> Turno: </strong> </label>
                <select class="form-select" aria-label="Default select example" name="cuarenta_Turno" id="cuarenta_Turno" required>
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
                <td rowspan="3">Verificación a las placas de instrucciones y manuales de operación/mantenimiento.</td>
                <td colspan="">Comprobar que todas las señales aplicables estén en los lugares establecidos.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_1_1" id="cuarenta_1_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Comprobar también que el libro de registro y el manual de operaciones y mantenimiento estén disponibles en el elevador o en el lugar. </td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_1_2" id="cuarenta_1_2" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Sustituir el libro de registro y el manual de operaciones y mantenimiento que falte si fuera necesario</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_1_3" id="cuarenta_1_3" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="4">2</td>
                <td rowspan="4">Verificación a el conjunto limitador de velocidad/paracaídas.</td>
                <td colspan="">A través de los usuario del elevador informarse si el conjunto alguna vez ha actuado sin motivos aparentes, o si se ha observado algún ruido extraño durante el funcionamiento normal del elevador.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_2_0" id="cuarenta_1_0" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">a) Engrasar la cremallera. </td>+
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_2_1" id="cuarenta_1_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">b) Asegurarse de que el cojinete deslizante del eje de salida no esté desgastado</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_2_2" id="cuarenta_2_2" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">c) Piñones. Engrasar los ejes de los piñones aplicando grasa en las tres boquillas por la parte posterior de la placa del paracaídas.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_2_3" id="cuarenta_2_3" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="1">3</td>
                <td rowspan="1">Verificación a el Reductor de descenso de emergencia. </td>
                <td colspan="">Comprobar el nivel de aceite y rellenar si es necesario. En caso de fugas, el personal de mantenimiento cualificado/autorizado debe cambiar los retenes.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_3_1" id="cuarenta_3_1" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="2">4</td>
                <td rowspan="2">Verificación a los contrarodillos.</td>
                <td colspan="">Verificación de contra rodillos de la placa del grupo tractor, ganchos de seguridad y rodillos situados en el marco de la cabina en el concepto de fijación (apriete).</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_4_1" id="cuarenta_4_1" value="Si">
                    </div>
                </td>

            </tr>
            <tr>
                <td colspan="">Verificación de condición física de tornillería según las recomendaciones el Manual de operación y mantenimiento.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_4_2" id="cuarenta_4_2" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="1">5</td>
                <td rowspan="1">Verificación de la fijación del reductor.</td>
                <td colspan="">Verificación de la fijación (apriete), condición física de tornillería según las recomendaciones el Manual de operación y mantenimiento.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_5_1" id="cuarenta_5_1" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="1">6</td>
                <td rowspan="1">Verificación a el motor eléctrico y frenos.</td>
                <td colspan="">Verificación de parámetros de prueba referidos en el Manual de operación y mantenimiento.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_6_1" id="cuarenta_6_1" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="2">7</td>
                <td rowspan="2">Verificación a los interruptores principales y de emergencia.</td>
                <td colspan="">Verificación de funcionalidad de los interruptores principales.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_7_1" id="cuarenta_7_1" value="Si">
                    </div>
                </td>

            </tr>
            <tr>
                <td colspan="">Prueba de arranque de la cabina con cada uno de los interruptores desconectados.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_7_2" id="cuarenta_7_2" value="Si">
                    </div>
                </td>

            </tr>

            <tr>
                <td rowspan="1">8</td>
                <td rowspan="1"> Verificación a los controles de accionamiento. </td>
                <td colspan=""> Verificar la funcionalidad del sistema de control por medio de la prueba de accionamiento desde la cabina y paradas activando la función "Stop Próxima Parada" </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_8_1" id="cuarenta_8_1" value="Si">
                    </div>
                </td>

            </tr>

            <tr>
                <td rowspan="1">9</td>
                <td rowspan="1">Verificación a el sistema de frenos del motor eléctrico.</td>
                <td colspan="">Verificar que el juego entre la armadura del electroimán y el disco rotativo se encuentren en los parámetros establecidos en la sección E10 del manual de operaciones y mantenimiento</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_9_1" id="cuarenta_9_1" value="Si">
                    </div>
                </td>

            </tr>

            <tr>
                <td rowspan="2">10</td>
                <td rowspan="2">Verificación a los cables de fuerza motriz</td>
                <td colspan="">Verificar condición física de deformación , daño o torsión.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_10_1" id="cuarenta_10_1" value="Si">
                    </div>
                </td>

            </tr>
            <tr>
                <td colspan="">En el cable colgante inspeccionar la sujeción a el brazo porta cable de la cabina y al soporte del mástil con ubicación en el trole tensor referencia Manual de operación y mantenimiento</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_10_2" id="cuarenta_10_2" value="Si">
                    </div>
                </td>
            </tr>

            <tr>
                <td rowspan="6">11</td>
                <td rowspan="6">Verificación a enclavamientos .</td>
                <td colspan="">Verificar los enclavamientos de arranque de la cabina con:</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_11_1" id="cuarenta_11_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">a) Puerta de entrada de la cabina abierta. </td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_11_2" id="cuarenta_11_2" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">b) Puerta de salida de la cabina abierta</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_11_3" id="cuarenta_11_3" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">c) Con la trampilla del techo de la cabina abierta</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_11_4" id="cuarenta_11_4" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">d) Con cada puerta de parada abierta</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_11_5" id="cuarenta_11_5" value="Si">
                    </div>
                </td>

            </tr>
            <tr>
                <td colspan="">e) Mientras se intentan abrir las puertas.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_11_6" id="cuarenta_11_6" value="Si">
                    </div>
                </td>

            </tr>

            <tr>
                <td rowspan="1">12</td>
                <td rowspan="1">Verificación a las condiciones estructurales y físicas del área útil (techo/suelo de cabina)</td>
                <td colspan="">Verificación física del suelo , techo , barandilla , fijación, desgaste de los elementos y retiro de objetos sueltos o en malas condiciones</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_12_1" id="cuarenta_12_1" value="Si">
                    </div>
                </td>

            </tr>

            <tr>
                <td rowspan="1">13</td>
                <td rowspan="1">Verificación del estado de engrase de Para el reductor/nivel aceite hidráulico del tanque en donde el dispositivo de bloqueo haya actuado/cremallera/conjunto limitador de velocidad/paracaídas</td>
                <td colspan="">Verificación de la ejecución del proceso de engrase por el proveedor externo dispuesto en el Manual de operaciones y mantenimiento</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cuarenta_13_1" id="cuarenta_13_1" value="Si">
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
                <select class="form-select" aria-label="Default select example" name="cuarentaOperadorForm" id="cuarentaOperadorForm" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                    <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                    <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                    <option value="Tomas Huerta Palacios">Tomas Huerta Palacios</option>
                    <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option>
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <option value="Armando Estrada González">Armando Estrada González</option>
                    <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                </select>
            </div>
            <div class="form-group col">
                <label>Verificador: </label>
                <select class="form-select" aria-label="Default select example" name="cuarentaVerificadorForm" id="cuarentaVerificadorForm" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                    <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                    <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                    <option value="Tomas Huerta Palacios">Tomas Huerta Palacios</option>
                    <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option>
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <option value="Armando Estrada González">Armando Estrada González</option>
                    <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                </select>

            </div>
            <div class="form-group col">
                <label>Encargado: </label>
                <select class="form-select" aria-label="Default select example" name="cuarentaEncargadoForm" id="cuarentaEncargadoForm" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                    <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                    <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                    <option value="Tomas Huerta Palacios">Tomas Huerta Palacios</option>
                    <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option>
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <option value="Armando Estrada González">Armando Estrada González</option>
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