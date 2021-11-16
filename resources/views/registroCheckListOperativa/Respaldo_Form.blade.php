<div class="container">
    <div class="form">
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <label for="noEco"> <strong> No Eco: </strong> </label>
                    <input type="number" placeholder="000" class="form-control" name="noEco" id="noEco">
                    <font style="color:red"> {{ $errors->has('noEco') ?  $errors->first('noEco') : '' }} </font>
                </div>
                <div class="form-group col">
                    <label for="fechaRegistro"> <strong> Horometro: </strong> </label>
                    <input type="text" placeholder="" class="form-control" name="fechaRegistro" id="fechaRegistro">
                    <font style="color:red"> {{ $errors->has('fechaRegistro') ?  $errors->first('fechaRegistro') : '' }} </font>
                </div>
                <div class="form-group col">
                    <label for="horometro"> <strong> Fecha: </strong> </label>
                    <input type="date" placeholder="" class="form-control" name="horometro" id="horometro">
                    <font style="color:red"> {{ $errors->has('horometro') ?  $errors->first('horometro') : '' }} </font>
                </div>
                <div class="form-group col">
                    <label for="turno"> <strong> Turno: </strong> </label>
                    <input type="text" placeholder="" class="form-control" name="turno" id="turno">
                    <font style="color:red"> {{ $errors->has('turno') ?  $errors->first('turno') : '' }} </font>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="divForm">
                <div class="card-body">
                    <h5 class="card-title">Inspeccion diaria antes de la operacion / funcionamiento:</h5>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>1. Verificar botones de "stop".</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="inspeccionVerificar" id="inspeccionVerificar" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>2.- Comprobar la operacion de microswichts.</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="inspeccionMicroswichts" id="inspeccionMicroswichts" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>3.- Micros de puertas de entrada de cabina.</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="inspeccionMicrosEntrada" id="inspeccionMicrosEntrada" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>4.- Micros de puerta de salida.</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="inspeccionMicrosSalida" id="inspeccionMicrosSalida" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>5.- Micros de puerta de desembarque.</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="inspeccionMicrosDesembarque" id="inspeccionMicrosDesembarque" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>6.- Verificar que este funcionando linea telefonica.</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="inspeccionTelefonica" id="inspeccionTelefonica" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>7.- Comprobar intercierres mecanicos.</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="inspeccionComprobar" id="inspeccionComprobar" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>8.- Comprobar en cada parada que las puertas se puedan abrir y cerrar, y que queden nuevamente bloqueadas despues de cerrarse.</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="inspeccionComprobarParada" id="inspeccionComprobarParada" value="Si">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            img {
                width: 55% !important;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }
        </style>

        <div class="col-sm-6">
            <div class="divForm">
                <div class="card-body">
                    <h5 class="card-title">Cabina de operacion</h5>
                    <div class="row mt-2">
                        <img src="/img/alimak2.jpg" width="80%" height="80%" alt="">
                    </div>
                    <div class="row mt-2">
                        <label for="observaciones">Observaciones:</label>
                        <textarea class="form-control" name="observaciones" id="observaciones" style="height: 100px"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="divForm">
                <div class="card-body">
                    <h5 class="card-title">Inspeccion diaria antes de la operacion / funcionamiento:</h5>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>1.- Verificar que las guias de cables esten completos y en su lugar.</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="verificarGuias" id="verificarGuias" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>2.- Verificar interruptores y levas limitadores esten completos y en su lugar.</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="verificarInterruptores" id="verificarInterruptores" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>3.- El elevador este libre de equipos no asociados con el mismo..</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="verificarElevador" id="verificarElevador" value="Si">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label>4.- El recorrido y el cerco esten libres de objetos extranos .</label>
                        </div>
                        <div class="form-group col-1">
                            <input type="checkbox" class="checkbox" name="verificarRecorrido" id="verificarRecorrido" value="Si">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="divForm">
                <div class="card-body">
                    <h5 class="card-title">Verificacion visual</h5>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label> <strong> Elaboro. </strong> </label>
                        </div><input type="text" class="form-control" name="elaboro" id="elaboro">
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label> <strong> Verifico. </strong> </label>
                        </div>
                        <div class="form-group col">
                            <input type="text" class="form-control" name="entregaTurno" id="entregaTurno">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label> <strong> Entrega turno. </strong> </label>
                        </div>
                        <div class="form-group col">
                            <input type="text" class="form-control" name="verifico" id="verifico">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label> <strong> Recibe turno. </strong> </label>
                        </div>
                        <div class="form-group col">
                            <input type="text" class="form-control" name="RecibeTurno" id="RecibeTurno">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <!-- <button type="submit" class="btn btn-success btn-sm">Submit</button> -->
                    <!-- <style>
                        .middleAlimak {
                            position: relative;
                            top: 10%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            margin: auto;
                        }

                        .btn {
                            position: relative;
                            display: block;
                            color: black;
                            font-size: 14px;
                            font-family: "montserrat";
                            text-decoration: none;
                            margin: 30px 0;
                            border: 2px solid black;
                            padding: 14px 60px;
                            text-transform: uppercase;
                            overflow: hidden;
                            transition: 1s all ease;
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
                        }

                        .btn1::before {
                            width: 0%;
                            height: 100%;
                        }

                        .btn1:hover::before {
                            width: 100%;
                        }
                    </style>
                    <div class="middleAlimak">
                        <button type="submit" href="" class="btn btn1"> <strong> Guardar </strong></button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>