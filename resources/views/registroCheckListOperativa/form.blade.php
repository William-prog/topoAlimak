@extends('layouts.app')

@section('content')

<script>
    window.onload = function() {
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth() + 1; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
        if (dia < 10)
            dia = '0' + dia; //agrega cero si el menor de 10
        if (mes < 10)
            mes = '0' + mes //agrega cero si el menor de 10
        document.getElementById('clo_Fecha').value = ano + "-" + mes + "-" + dia;
    }
</script>

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
                <label for="clo_Nombre"> <strong>No. Eco:</strong> </label>
                <input type="text" class="form-control" value="N/E" name="clo_Eco" id="clo_Eco">
            </div>
            <div class="form-group col">
                <label for="clo_Num"> <strong>Fecha:</strong> </label>
                <input type="date" placeholder="" class="form-control" name="clo_Fecha" id="clo_Fecha">
            </div>
            <div class="form-group col">
                <label for="clo_Fecha"> <strong> Horómetro: </strong> </label>
                <input type="text" placeholder="" class="form-control" name="clo_Horo" id="clo_Horo">
            </div>
            <div class="form-group col">
                <label for="clo_Turno"> <strong> Turno: </strong> </label>
                <select class="form-select" aria-label="Default select example" name="clo_Turno" id="clo_Turno" required>
                    <option disabled selected>Seleccione Turno</option>
                    <option value="Primera">Primera</option>
                    <option value="Segunda">Segunda</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="row mt-2">
            <div class="form-group col">
                <div class="row mt-1">
                    <div class="divCheckList form-group col">
                        <h3 class="encabezado">Especificaciones</h3>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="textEspacing divCheckList form-group col">
                        <div class="divCheckList alert alert-success" role="alert">
                            <strong> Efectuar la verificación con el equipo apagado.</strong>
                        </div>
                    </div>
                    <div class="textEspacing divCheckList form-group col">
                        <div class="divCheckList alert alert-success" role="alert">
                            <strong> Utilice el equipo de protección completo durante la verificación.</strong>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="textEspacing divCheckList form-group col">
                        <div class="alert alert-success" role="alert">
                            <strong> Reporte anomalías inmediatamente.</strong>
                        </div>
                    </div>
                    <div class="textEspacing divCheckList form-group col">
                        <div class="alert alert-success" role="alert">
                            <strong> Reporte el inicio y termino de la verificación.</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="form">
        <div class="row mt-2">

            <div class="padre form-group col-3">
                <img src="/img/alimak2.png" height="85%" alt="">
            </div>

            <div class="form-group col">
                <div class="row mt-1">
                    <div class="divCheckList form-group col">
                        <h3 class="encabezado">Puntos de verificación del procedimiento de trabajo.</h3>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>1. Verificar fosa y bombeo. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Verificar_foza" id="clo_Verificar_foza" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>2. Verificar botones de paro <i>"stop" </i>. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Verificar_botones_stop" id="clo_Verificar_botones_stop" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>3. Verificar Microinterruptores de la puerta de entrada de cabina. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Micros_puerta_entrada" id="clo_Micros_puerta_entrada" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>4. Verificar Microinterruptores de la puerta de salida. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Micros_puerta_salida" id="clo_Micros_puerta_salida" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>5. Verificar Microinterruptores de puerta de desembarque. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Micros_desembarque" id="clo_Micros_desembarque" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>6. Verificar que este funcionando la línea telefónica. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Verificar_telefonica" id="clo_Verificar_telefonica" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>7. Verificar sentido del aire. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Comprobar_aire" id="clo_Comprobar_aire" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>8. Comprobar intercierres mecánicos.</label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Comprobar_intercierres" id="clo_Comprobar_intercierres" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>9. Comprobar palanca de liberación de freno. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Verificar_palanca" id="clo_Verificar_palanca" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>10. Comprobar en cada parada que las puertas se puedan <strong> abrir</strong>/<strong>cerrar</strong>, y que queden bloqueadas después del cierre. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Verificar_puertas" id="clo_Verificar_puertas" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col">
                        <h3 class="encabezado">Verificación visual. </h3>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>1. Verificar que las guías de cables estén completos y en su lugar.</label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Verificar_guias" id="clo_Verificar_guias" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>2. Verificar que los interruptores y las levas limitadores estén completos y en su lugar. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Verificar_interruptores" id="clo_Verificar_interruptores" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>3. Verificar orden y limpieza. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Verificar_orden" id="clo_Verificar_orden" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>4. Verificar grado de desgatse del freno. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Verificar_grado" id="clo_Verificar_grado" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>5. El elevador esté libre de equipos no asociados con el mismo. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Elevador" id="clo_Elevador" value="Si">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="divCheckList form-group col-10">
                        <label>6. El recorrido y el cerco estén libres de objetos extraños. </label>
                    </div>
                    <div class="divCheckList form-group col-1">
                        <input type="checkbox" class="checkbox" name="clo_Recorrido" id="clo_Recorrido" value="Si">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script id="rendered-js">
        $(document).click(function() { //Creamos la Funcion del Click
            var checked = $(".checkbox:checked").length; //Creamos una Variable y Obtenemos el Numero de Checkbox que esten Seleccionados
            var nochecked = 16 - checked; //Creamos una Variable y Obtenemos el Numero de Checkbox que esten Seleccionados
            $("#SeleccionadosOperativaSi").val(checked);
            $("#SeleccionadosOperativaNo").val(nochecked);
            // $("#").text("Tienes Actualmente " + checked + " Checkbox " + "Seleccionado(s)"); //Asignamos a la Etiqueta <p> el texto de cuantos Checkbox ahi Seleccionados(Combinando la Variable)
        }).
        trigger("click"); //Simulamos el Evento Click(Desde el Principio, para que muestre cuantos ahi Seleccionados)
        //# sourceURL=pen.js
    </script>

    <div class="row mt-2" style="display: none;">
        <div class="col">
            <div class="row mt-2">
                <div class="divCheckList form-group col-10">
                    <input type="text" id="SeleccionadosOperativaSi" name="SeleccionadosOperativaSi">
                </div>
                <div class="divCheckList form-group col-10">
                    <input type="text" id="SeleccionadosOperativaNo" name="SeleccionadosOperativaNo">
                </div>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="row mt">
            <div class="form-group col">
                <label style="font-weight: bold;" for="observaciones">Observaciones:</label>
                <textarea class="form-control" name="clo_Observaciones" id="clo_Observaciones" rows="5" required></textarea>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="row mt">
            <div class="form-group col">
                <label style="font-weight: bold;">Elaboró:</label>
                <select class="form-select" aria-label="Default select example" name="clo_Elaboro" id="clo_Elaboro" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                    <option value="Ruben Alvarez De Loera">Ruben Alvarez De Loera</option>
                    <!-- <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option> -->
                    <!-- <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option> -->
                    <!-- <option value="Adán Eliutt Ruíz Morán">Adán Eliutt Ruíz Morán</option> -->
                    <!-- <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option> -->
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <!-- <option value="Armando Estrada González">Armando Estrada González</option> -->
                    <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                </select>
            </div>
            <div class="form-group col">
                <label style="font-weight: bold;">Verificó:</label>
                <select class="form-select" aria-label="Default select example" name="clo_Verifico" id="clo_Verifico" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                    <option value="Ruben Alvarez De Loera">Ruben Alvarez De Loera</option>
                    <!-- <!-- <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option> --> -->
                    <!-- <!-- <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option> --> -->
                    <!-- <!-- <option value="Adán Eliutt Ruíz Morán">Adán Eliutt Ruíz Morán</option> --> -->
                    <!-- <!-- <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option> --> -->
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <!-- <!-- <option value="Armando Estrada González">Armando Estrada González</option> --> -->
                    <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                </select>
            </div>
        </div>
        <div class="row mt">
            <div class="form-group col">
                <label style="font-weight: bold;">Entrega turno: </label>
                <select class="form-select" aria-label="Default select example" name="clo_Entrego" id="clo_Entrego" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                    <option value="Ruben Alvarez De Loera">Ruben Alvarez De Loera</option>
                    <!-- <!-- <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option> --> -->
                    <!-- <!-- <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option> --> -->
                    <!-- <!-- <option value="Adán Eliutt Ruíz Morán">Adán Eliutt Ruíz Morán</option> --> -->
                    <!-- <!-- <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option> --> -->
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <!-- <!-- <option value="Armando Estrada González">Armando Estrada González</option> --> -->
                    <option value="Víctor Hugo Ruíz Elizalde">Víctor Hugo Ruíz Elizalde</option>
                </select>
            </div>
            <div class="form-group col">
                <label style="font-weight: bold;">Recibe turno: </label>
                <select class="form-select" aria-label="Default select example" name="clo_Recibe" id="clo_Recibe" required>
                    <option selected>Seleccione Opcion</option>
                    <option value="Amanda Robles Arango">Amanda Robles Arango</option>
                    <option value="Ruben Alvarez De Loera">Ruben Alvarez De Loera</option>
                    <!-- <!-- <option value="Itzel Primavera Serrano Ortiz">Itzel Primavera Serrano Ortiz</option> --> -->
                    <!-- <!-- <option value="Sheccid Itzel Diaz Cadena">Sheccid Itzel Diaz Cadena</option> --> -->
                    <!-- <!-- <option value="Adán Eliutt Ruíz Morán">Adán Eliutt Ruíz Morán</option> --> -->
                    <!-- <!-- <option value="Diana Denisse Estrada Arenas">Diana Denisse Estrada Arenas</option> --> -->
                    <option value="Roberto Moreira Alvarado">Roberto Moreira Alvarado</option>
                    <!-- <!-- <option value="Armando Estrada González">Armando Estrada González</option> --> -->
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
                    <div class="middle" style="display: block;">
                        <button style="cursor: pointer" id="saveBut" class="textEspacing btn btn1">{{ __('Guardar Registro     ') }}<i class="fas fa-plus-circle"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('layouts.footer')

@endsection