@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="encabezado">Información General</h3>

    <div class="form">
        <div class="row mt-2">
            <div class="form-group col">
                <label for="cientoVeinte_Equipo"> <strong> Equipo: </strong> </label>
                <input type="text" class="form-control" name="cientoVeinte_Equipo" id="cientoVeinte_Equipo">
            </div>
            <div class="form-group col">
                <label for="cientoVeinte_Marca"> <strong> Marca: </strong> </label>
                <input type="text" class="form-control" value="ALIMAK" name="cientoVeinte_Marca" id="cientoVeinte_Marca">
            </div>
            <div class="form-group col">
                <label for="cientoVeinte_NumE"> <strong> Núm. Eco: </strong> </label>
                <input type="text" class="form-control" value="N/E" name="cientoVeinte_NumE" id="cientoVeinte_NumE">
            </div>
            <div class="form-group col">
                <label for="cientoVeinte_Fecha"> <strong> Fecha: </strong> </label>
                <input type="date" placeholder="" class="form-control" name="cientoVeinte_Fecha" id="cientoVeinte_Fecha">
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col">
                <label for="cientoVeinte_Tipo"> <strong> Tipo de Mant: </strong> </label>
                <input type="text" class="form-control" value="40 Hrs" name="cientoVeinte_Tipo" id="cientoVeinte_Tipo">
            </div>
            <div class="form-group col">
                <label for="cientoVeinte_Horo"> <strong> Horómetro: </strong> </label>
                <input type="number" class="form-control" name="cientoVeinte_Horo" id="cientoVeinte_Horo">
            </div>
            <div class="form-group col">
                <label for="cientoVeinte_Horario"> <strong> Horario: </strong> </label>
                <input type="time" class="form-control" name="cientoVeinte_Horario" id="cientoVeinte_Horario">
            </div>
            <div class="form-group col">
                <label for="cientoVeinte_Turno"> <strong> Turno: </strong> </label>
                <select class="form-select" aria-label="Default select example" name="cientoVeinte_Turno" id="cientoVeinte_Turno" required>
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
                <td rowspan="1">1</td>
                <td rowspan="1">Verificación de la estructura del mástil</td>
                <td colspan="">Verificar que estén fijos y apretados los pernos de unión entre las secciones, los
                    tornillos de fijación de la cremallera y los tornillos de unión para fijar el mástil en la
                    placa base, referencia Manual de operación y mantenimiento sección 2. Par de
                    apriete</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_1_1" id="cientoVeinte_1_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">2</td>
                <td rowspan="1">Verificación de los arrostramientos.</td>
                <td colspan="">Verificar que los tornillos estén apretados en su totalidad y la fijación a la
                    estructura; referencia Manual de operación y mantenimiento sección 2. Par de
                    apriete</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_2_1" id="cientoVeinte_2_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="4">3</td>
                <td rowspan="4">Verificación de los Interruptores al final de recorrido y levas limitadoras</td>
                <td colspan="">Comprobar las posiciones y el funcionamiento de los interrumptores. </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_3_1" id="cientoVeinte_3_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Comprobar el funcionamiento realizando recorridos de prueba.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_3_2" id="cientoVeinte_3_2" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Aflojar la fijación de los interruptores de final de recorrido inferior/ superior de la placa de la maquinaria (realizar puentes para los interruptores en el panel eléctrico). </td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_3_3" id="cientoVeinte_3_3" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Comprobar el interruptor de final de recorrido correspondiente.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_3_4" id="cientoVeinte_3_4" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">4</td>
                <td rowspan="1">Verificación de las guías de cable colgante.</td>
                <td colspan="">Verificar de forma manual la fijación de las guías de cable, la funcionalidad e
                    instalación en el mástil en relación con el brazo de soporte del cable , el par de
                    apriete a 22 Nm. La verificación se realizará en un 10% de las guías de cable, en
                    caso de que se detecte alguna desviación, amplíe la comprobación a todas las
                    guías de cable</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_4_1" id="cientoVeinte_4_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="5">5</td>
                <td rowspan="5">Verificación a el trole tensor.</td>
                <td colspan="">Verificar que el trole tensor no entre en contacto con el apoyo de los
                    amortiguadores en el cercado base y que se deslice paralelamente a los tubos del
                    mástil su funcionalidad.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_5_1" id="cientoVeinte_5_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Verificar fijación.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_5_2" id="cientoVeinte_5_2" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Verificar el desgaste de los rodillos guía.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_5_3" id="cientoVeinte_5_3" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Verificar que la polea del cable motriz gire con suavidad.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_5_4" id="cientoVeinte_5_4" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Verificar la lubricación de los rodillos de plástico del trole tensor y el juego de los
                    rodillos guía del trole tensor, referencia Manual de operación y mantenimiento
                    sección E31.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_5_5" id="cientoVeinte_5_5" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">6</td>
                <td rowspan="1">Verificación del foso base.</td>
                <td colspan="">Retiro de escombros , caídos, limpieza , deteccion de fisuras o daños
                    estructurales.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_6_1" id="cientoVeinte_6_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">7</td>
                <td rowspan="1">Verificación a los
                    Amortiguadores.</td>
                <td colspan="">Verificar que los resortes se encuentren en el lugar previsto y en buenas
                    condiciones.</td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_7_1" id="cientoVeinte_7_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">8</td>
                <td rowspan="1">Verificación a la
                    funcionalidad de las
                    puertas de cabina y parada.</td>
                <td colspan="">Verificar el funcionamiento de la señal de alarma, iluminación y el sistema de
                    comunicación.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_8_1" id="cientoVeinte_8_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">9</td>
                <td rowspan="1">Verificación a el sistema
                    de iluminación y señales de
                    alarma.</td>
                <td colspan="">Verificar el funcionamiento de la señal de alarma, iluminación y el sistema de
                    comunicación.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_9_1" id="cientoVeinte_9_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">10</td>
                <td rowspan="1">Verificación a el sistema
                    de iluminación de
                    emergencia.</td>
                <td colspan="">Desconectar el interruptor principal del techo de la cabina ,comprobar que la luz de
                    emergencia funcione, conectar el interruptor principal ,comprobar que el LED del
                    cargador de batería esté encendido.

                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_10_1" id="cientoVeinte_10_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">11</td>
                <td rowspan="1">Verificación a el sistema
                    de piñones y cremallera.
                </td>
                <td colspan="">Verificar el desgaste de acuerdo con los parameros del Manual de operación y
                    mantenimiento en el capítulo “Ajustes y desgastes" sección E21.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_11_1" id="cientoVeinte_11_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">12</td>
                <td rowspan="1">Verificación de barandales
                    /cercados.
                </td>
                <td colspan="">Verificar la altura reglamentaria de los cercados, enclavamiento de las puertas de
                    las plantas con relación a la cabina sea conforme a las instrucciones del Manual de
                    operación y mantenimiento sección E47.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_12_1" id="cientoVeinte_12_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">13</td>
                <td rowspan="1">Verificacion de obstáculos
                    próximos al elevador.
                </td>
                <td colspan="">Verificación de las distancias entre las partes móviles y las fijas que pudieran
                    representar un obstaculo a la unidad de traslado.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_13_1" id="cientoVeinte_13_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">14</td>
                <td rowspan="1">Verificación de los rodillos
                    guía.
                </td>
                <td colspan="">Verificar los rodillos (tipo bola) el desgaste, la holgura de los rodillos y justes.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_14_1" id="cientoVeinte_14_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">15</td>
                <td rowspan="1">Verificación a el Conjunto
                    limitador de
                    velocidad/paracaídas
                </td>
                <td colspan="">Efectuar la prueba de caída libre de acuerdo con lo indicado en el Manual de
                    operación y mantenimiento sección E32.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_15_1" id="cientoVeinte_15_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="4">16</td>
                <td rowspan="4">Verificación a el dispositivo
                    de descenso /bajada de
                    emergencia.
                </td>
                <td colspan="">Verificar la funcionalidad del dispositivo por prueba de descenso de emergencia.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_16_1" id="cientoVeinte_16_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Observar que el tirador recupera su posición inicial después de la operación.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_16_2" id="cientoVeinte_16_2" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Las levas de reposición están presentes en cada parada. </td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_16_3" id="cientoVeinte_16_3" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">El elevador se detiene automáticamente en el nivel seleccionado de paro.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_16_4" id="cientoVeinte_16_4" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="2">17</td>
                <td rowspan="2">Verificación a el motor(es)
                    eléctrico(s).
                </td>
                <td colspan="">Verificación física general de los elementos que lo componen. </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_17_1" id="cientoVeinte_17_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Limpiar las aletas de refrigeración.</td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_17_2" id="cientoVeinte_17_2" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">18</td>
                <td rowspan="1">Verificación a el sistema
                    de control de
                    sobrecarga.
                </td>
                <td colspan="">Verificar que se efectué la prueba de sobrecarga para probar el sistema
                    observando que no se produzcan chispas , engrase de los bulones de tracción y los
                    muelles platillo </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_18_1" id="cientoVeinte_18_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1">19</td>
                <td rowspan="1">Verificación a engrase.
                </td>
                <td colspan="">Verificar y realizar engrase en el conjunto guía del cable, puertas de paradas,
                    enclavamientos y rampas, conjunto del freno centrífugo y cable de control
                    referencia Manual de operaciones y mantenimiento sección Programa de engrase
                    E40.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_19_1" id="cientoVeinte_19_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="2">20</td>
                <td rowspan="2">Verificación a frenos del motor.
                </td>
                <td colspan="">Verificar que se realice la prueba de estática , prueba de control de micro
                    interruptor (si lo hubiera) para la función de apertura/cierra, referenciado en el Manual de operación y mantenimiento sección E10.
                </td>
                <td colspan="">
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_20_1" id="cientoVeinte_20_1" value="Si">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="">Prueba de control de micro interruptor (si lo hubiera) para la función de
                    apertura/cierra, referenciado en el Manual de operación y mantenimiento sección
                    E11.
                </td>
                <td>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="cientoVeinte_20_2" id="cientoVeinte_20_2" value="Si">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>


    <div class="form">
        <div class="row mt-2">
            <div class="form-group col">
                <label for="observaciones">Observaciones:</label>
                <textarea class="form-control" name="cientoVeinteObservacionesForm" id="cientoVeinteObservacionesForm" rows="5" required></textarea>
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col">
                <label>Operador: </label>
                <select class="form-select" aria-label="Default select example" name="cientoVeinteOperadorForm" id="cientoVeinteOperadorForm" required>
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
                <select class="form-select" aria-label="Default select example" name="cientoVeinteVerificadorForm" id="cientoVeinteVerificadorForm" required>
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
                <select class="form-select" aria-label="Default select example" name="cientoVeinteEncargadoForm" id="cientoVeinteEncargadoForm" required>
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