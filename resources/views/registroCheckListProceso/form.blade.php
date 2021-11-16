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

<div class="container">
    <h3 class="encabezado">Información General</h3>

    <div class="form">
        <div class="row mt-2">
            <div class="form-group col">
                <label for="clp_Eco"> <strong>No. Eco:</strong> </label>
                <input type="text" class="form-control" value="N/E" name="clp_Eco" id="clp_Eco">
            </div>
            <div class="form-group col">
                <label for="clp_Fecha"> <strong>Fecha:</strong> </label>
                <input type="date" placeholder="" class="form-control" name="clp_Fecha" id="clp_Fecha">
            </div>
            <div class="form-group col">
                <label for="clp_Horo"> <strong> Horómetro: </strong> </label>
                <input type="text" placeholder="" class="form-control" name="clp_Horo" id="clp_Horo">
            </div>
            <div class="form-group col">
                <label for="clp_Turno"> <strong> Turno: </strong> </label>
                <select class="form-select" aria-label="Default select example" name="clp_Turno" id="clp_Turno" required>
                    <option disabled selected>Seleccione Turno</option>
                    <option value="Primera">Primera</option>
                    <option value="Segunda">Segunda</option>
                </select>
            </div>
        </div>
    </div>

    <h3 class="encabezado">Puntos de verificacion del procedimiento de trabajo</h3>
    <div class="form">
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>1. Comunicación de la programación de las actividades para su realización. Reunión de Inicio de Trabajo (RIT).</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_1" id="clp_1" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>11. Prueba y cierre de las puertas del ascensor.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_11" id="clp_11" value="Si">
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>2. Verificación de la <strong>bitácora</strong>/<strong>informe</strong> de turno laboral.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_2" id="clp_2" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>12. Programación del nivel de descenso de los usuarios.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_12" id="clp_12" value="Si">
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>3. Verificación de la programación de acceso de personal.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_3" id="clp_3" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>13. Traslado del personal al nivel programado.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_13" id="clp_13" value="Si">
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>4. Apertura de la puerta de resguardo lateral del ascensor de personal.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_4" id="clp_4" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>14. Detener el ascensor en nivel de descenso.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_14" id="clp_14" value="Si">
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>5. Elaboración de la lista de verificación de funcionalidad del ascensor de personal. </label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_5" id="clp_5" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>15. Esperar el descenso del personal para reiniciar el ciclp.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_15" id="clp_15" value="Si">
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>6. Informe de condiciones de inicio de turno.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_6" id="clp_6" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>16. Cierre de puertas y prueba funcionalidad.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_16" id="clp_16" value="Si">
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>7. Corregir cualquier situación de orden y limpieza en el área antes de comenzar a operar <strong>y</strong>/<strong>o</strong> sanitización del área.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_7" id="clp_7" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>17. Orden, limpieza y sanitización.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_17" id="clp_17" value="Si">
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>8. Conectar el interruptor principal situado en el armario eléctrico.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_8" id="clp_8" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>18. Esperar el descenso del personal para reiniciar el ciclp.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_18" id="clp_18" value="Si">
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>9. Solicitar el ingreso del personal programado a trasladar.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_9" id="clp_9" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>19. Cierre de puertas y prueba funcionalidad.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_19" id="clp_19" value="Si">
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-2">

            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>10. Verificar que el indicador de carga nominal (máxima) se encuentre en los parámetros permitidos.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_10" id="clp_10" value="Si">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mt-2">
                    <div class="divCheckList form-group col-10">
                        <label>20. Orden, limpieza y sanitización.</label>
                    </div>
                    <div class="divCheckList form-group col">
                        <input type="checkbox" class="checkbox" name="clp_20" id="clp_20" value="Si">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.clpudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script id="rendered-js">
        $(document).click(function() { //Creamos la Funcion del Click
            var checked = $(".checkbox:checked").length; //Creamos una Variable y Obtenemos el Numero de Checkbox que esten Seleccionados
            var nochecked = 20 - checked; //Creamos una Variable y Obtenemos el Numero de Checkbox que esten Seleccionados


            $("#SeleccionadosProcesoSi").val(checked);
            $("#SeleccionadosProcesoNo").val(nochecked);

            // $("#").text("Tienes Actualmente " + checked + " Checkbox " + "Seleccionado(s)"); //Asignamos a la Etiqueta <p> el texto de cuantos Checkbox ahi Seleccionados(Combinando la Variable)
        }).
        trigger("click"); //Simulamos el Evento Click(Desde el Principio, para que muestre cuantos ahi Seleccionados)
        //# sourceURL=pen.js
    </script>


    <div class="row mt-2" style="display: block;">
        <div class="col">
            <div class="row mt-2">
                <div class="divCheckList form-group col-10">
                    <input type="text" id="SeleccionadosProcesoSi" name="SeleccionadosProcesoSi">
                </div>
                <div class="divCheckList form-group col-10">
                    <input type="text" id="SeleccionadosProcesoNo" name="SeleccionadosProcesoNo">
                </div>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="row mt">
            <div class="form-group col">
                <label style="font-weight: bold;" for="observaciones">Observaciones:</label>
                <textarea class="form-control" name="clp_Observaciones" id="clp_Observaciones" rows="5" required></textarea>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="row mt">
            <div class="form-group col">
                <label style="font-weight: bold;">Supervisor que elabora: </label>
                <select class="form-select" aria-label="Default select example" name="clp_Supervisor" id="clp_Supervisor" required>
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
                <label style="font-weight: bold;">Encargado de área: </label>
                <select class="form-select" aria-label="Default select example" name="clp_Encargado" id="clp_Encargado" required>
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
                <label style="font-weight: bold;">Operador: </label>
                <select class="form-select" aria-label="Default select example" name="clp_Operador" id="clp_Operador" required>
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
            <!-- <div class="form-group col">
                <label>Sistema de Gestión Integral: </label>
                <select class="form-select" aria-label="Default select example" name="clp_Operador" id="recibeTurno_Form" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                    <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option>
                    <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option>
                </select>
            </div> -->
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
                        <button style="cursor: pointer" class="textEspacing btn btn1">{{ __('Guardar Registro     ') }}<i class="fas fa-plus-circle"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection