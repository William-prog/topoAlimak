<div class="row m-3">
    <div class="col">
        <label for="Fecha_Desde_General">Desde: </label>
        <input onchange="mostrarEstadisticasGenerales();" type="date" placeholder="00/00/000" class="form-control" name="Fecha_Desde_General" id="Fecha_Desde_General">
    </div>
    <div class="col">
        <label for="Fecha_Hasta_General">Hasta: </label>
        <input onchange="mostrarEstadisticasGenerales();" type="date" placeholder="00/00/000" class="form-control" name="Fecha_Hasta_General" id="Fecha_Hasta_General">
    </div>
</div>

<script>
    function mostrarEstadisticasGenerales() {
        var Fecha_Desde = $('#Fecha_Desde_General').val();
        var Fecha_Hasta = $('#Fecha_Hasta_General').val();

        estadisticasGeneralServicio();

        estadisticasGeneralHorometro();
    }
</script>


<script>
    function estadisticasGeneralServicio() {
        var Fecha_Desde = $('#Fecha_Desde_General').val();
        var Fecha_Hasta = $('#Fecha_Hasta_General').val();


        let cantEntradaTopo = jsonServicioEntradaTopo.filter(function(type, index) {
            return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
        });

        let cantEntradaFercons = jsonServicioEntradaFercons.filter(function(type, index) {
            return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
        });

        let cantEntradaFresnillo = jsonServicioEntradaFresnillo.filter(function(type, index) {
            return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
        });

        let cantEntradaCoymsa = jsonServicioEntradaCoymsa.filter(function(type, index) {
            return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
        });

        let cantEntradaClm = jsonServicioEntradaClm.filter(function(type, index) {
            return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
        });

        let cantEntradaTti = jsonServicioEntradaTti.filter(function(type, index) {
            return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
        });

        let cantEntradaOmytc = jsonServicioEntradaOmytc.filter(function(type, index) {
            return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
        });

        let cantEntradaOssa = jsonServicioEntradaOssa.filter(function(type, index) {
            return type.fechaRegistroEntrada >= Fecha_Desde && type.fechaRegistroEntrada <= Fecha_Hasta
        });






        let cantSalidaTopo = jsonServicioSalidaTopo.filter(function(type, index) {
            return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
        });

        let cantSalidaFercons = jsonServicioSalidaFercons.filter(function(type, index) {
            return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
        });

        let cantSalidaFresnillo = jsonServicioSalidaFresnillo.filter(function(type, index) {
            return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
        });

        let cantSalidaCoymsa = jsonServicioSalidaCoymsa.filter(function(type, index) {
            return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
        });

        let cantSalidaClm = jsonServicioSalidaClm.filter(function(type, index) {
            return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
        });

        let cantSalidaTti = jsonServicioSalidaTti.filter(function(type, index) {
            return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
        });

        let cantSalidaOmytc = jsonServicioSalidaOmytc.filter(function(type, index) {
            return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
        });

        let cantSalidaOssa = jsonServicioSalidaOssa.filter(function(type, index) {
            return type.fechaRegistroSalida >= Fecha_Desde && type.fechaRegistroSalida <= Fecha_Hasta
        });

        var total_Salida_Topo = cantSalidaTopo.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Salida_Fercons = cantSalidaFercons.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Salida_Fresnillo = cantSalidaFresnillo.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Salida_Coymsa = cantSalidaCoymsa.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Salida_Clm = cantSalidaClm.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Salida_Tti = cantSalidaTti.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Salida_Omytc = cantSalidaOmytc.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);
        var total_Salida_Ossa = cantSalidaOssa.reduce((sum, value) => (typeof parseInt(value.cantidadSalida) == "number" ? sum + parseInt(value.cantidadSalida) : sum), 0);


        var total_Entrada_Topo = cantEntradaTopo.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Entrada_Fercons = cantEntradaFercons.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Entrada_Fresnillo = cantEntradaFresnillo.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Entrada_Coymsa = cantEntradaCoymsa.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Entrada_Clm = cantEntradaClm.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Entrada_Tti = cantEntradaTti.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Entrada_Omytc = cantEntradaOmytc.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);
        var total_Entrada_Ossa = cantEntradaOssa.reduce((sum, value) => (typeof parseInt(value.cantidadEntrada) == "number" ? sum + parseInt(value.cantidadEntrada) : sum), 0);

        var total_Topo = total_Salida_Topo + total_Entrada_Topo;
        var total_Fercons = total_Salida_Fercons + total_Entrada_Fercons;
        var total_Fresnillo = total_Salida_Fresnillo + total_Entrada_Fresnillo;
        var total_Coymsa = total_Salida_Coymsa + total_Entrada_Coymsa;
        var total_Clm = total_Salida_Clm + total_Entrada_Clm;
        var total_Tti = total_Salida_Tti + total_Entrada_Tti;
        var total_Omytc = total_Salida_Omytc + total_Entrada_Omytc;
        var total_Ossa = total_Salida_Ossa + total_Entrada_Ossa;

        var total = total_Topo + total_Fercons + total_Fresnillo + total_Coymsa + total_Clm + total_Tti + total_Omytc + total_Ossa;

        $("#totalServicio").html(total);

        $("#totalTOPO").html(total_Topo);
        $("#totalCOYMSA").html(total_Coymsa);
        $("#totalOMyTC").html(total_Omytc);
        $("#totalPLC").html(total_Fresnillo);
        $("#totalFERCONS").html(total_Fercons);
        $("#totalOSSA").html(total_Ossa);
        $("#totalCLM").html(total_Clm);











        
        $("#totalTOPOEntrada").html(total_Entrada_Topo);
        $("#totalCOYMSAEntrada").html(total_Entrada_Coymsa);
        $("#totalOMyTCEntrada").html(total_Entrada_Omytc);
        $("#totalPLCEntrada").html(total_Entrada_Fresnillo);
        $("#totalFERCONSEntrada").html(total_Entrada_Fercons);
        $("#totalOSSAEntrada").html(total_Entrada_Ossa);
        $("#totalCLMEntrada").html(total_Entrada_Clm);
        
        $("#totalTOPOSalida").html(total_Salida_Topo);
        $("#totalCOYMSASalida").html(total_Salida_Coymsa);
        $("#totalOMyTCSalida").html(total_Salida_Omytc);
        $("#totalPLCSalida").html(total_Salida_Fresnillo);
        $("#totalFERCONSSalida").html(total_Salida_Fercons);
        $("#totalOSSASalida").html(total_Salida_Ossa);
        $("#totalCLMSalida").html(total_Salida_Clm);




        

        $("#totalMayorTOPO").html(total_Topo);
        $("#totalMayorFresnillo").html(total_Fresnillo);
        $("#totalMayorOMyTC").html(total_Omytc);

    }
</script>

<div class="row m-3">
    <div class="col">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Servicio Elevador Alimak</h5>
                <h6 class="card-subtitle mb-2 text-muted">Resumen</h6>
                <p class="card-text">El número de servicios no contempla entrada/salida sino el traslado de personal a diferentes niveles, el registro puede obtener de los reportes diarios.</p>
                <p class="card-text">En el período seleccionado del presente año se presentaron <strong id="totalServicio"> </strong> servicios de entrada y salida.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .card:hover {

        background-color: #3D3D3D;
        -webkit-transition: background-color 500ms linear;
        -ms-transition: background-color 500ms linear;
        transition: background-color 500ms linear;

        border: 4 px solid rgba(255, 119, 31, 80%);

        color: white;
    }

    .btn:hover {
        background-color: #FF771F;
        -webkit-transition: background-color 500ms linear;
        -ms-transition: background-color 500ms linear;
        transition: background-color 500ms linear;

    }
</style>

<div class="row m-3">

    <div class="col-6">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <div class="row m-3">
                    <div class="col-6">
                        <h5 class="card-title">Servicio a Contratista Entrada</h5>
                    </div>
                    <div class="col">
                        <h5 class="card-title">Servicio a Contratista Salida</h5>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            TOPO <span id="totalTOPOEntrada" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            TOPO <span id="totalTOPOSalida" id="horometro" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            Fresnillo PLC <span id="totalPLCEntrada" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            Fresnillo PLC <span id="totalPLCSalida" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            OMyTC <span id="totalOMyTCEntrada" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            OMyTC <span id="totalOMyTCSalida" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            FERCONS <span id="totalFERCONSEntrada" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            FERCONS <span id="totalFERCONSSalida" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            COYMSA <span id="totalCOYMSAEntrada" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            COYMSA <span id="totalCOYMSASalida" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            CLM <span id="totalCLMEntrada" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            CLM <span id="totalCLMSalida" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            OSSA <span id="totalOSSAEntrada" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            OSSA <span id="totalOSSASalida" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <div class="row m-3">
                    <div class="col-6">
                        <h5 class="card-title">Servicio a Contratista</h5>
                    </div>
                    <div class="col">
                        <h5 class="card-title">Mayor Número de Servicios a Contratistas</h5>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            TOPO <span id="totalTOPO" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            TOPO <span id="totalMayorTOPO" id="horometro" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            Fresnillo PLC <span id="totalPLC" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            Fresnillo PLC <span id="totalMayorFresnillo" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            OMyTC <span id="totalOMyTC" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            OMyTC <span id="totalMayorOMyTC" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            FERCONS <span id="totalFERCONS" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            COYMSA <span id="totalCOYMSA" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            CLM <span id="totalCLM" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-6">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            OSSA <span id="totalOSSA" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row m-3">



    <script>
        function estadisticasGeneralHorometro() {
            const jsonTopoHorometro = <?php echo json_encode($registroHorometro) ?>;
            var fecha_Desde_General = $('#Fecha_Desde_General').val();
            var fecha_Hasta_General = $('#Fecha_Hasta_General').val();

            let cantTopoEntradaHorometro = jsonTopoHorometro.filter(function(type, index) {
                return type.turnoHorometro == 'Primera' && type.fechaHorometro >= fecha_Desde_General && type.fechaHorometro <= fecha_Hasta_General
            });

            let cantTopoSalidaHorometro = jsonTopoHorometro.filter(function(type, index) {
                return type.turnoHorometro == 'Segunda' && type.fechaHorometro >= fecha_Desde_General && type.fechaHorometro <= fecha_Hasta_General
            });

            var Horometro = jsonTopoHorometro.map(function(e) {
                let valoresHorometroCuarenta = (e.totalHorometro);
                return valoresHorometroCuarenta;
            });

            var HorometroPrimera = cantTopoEntradaHorometro.map(function(e) {
                let valoresHorometroCuarentaPrimera = (e.totalHorometro);
                return valoresHorometroCuarentaPrimera;
            });

            var HorometroSegunda = cantTopoSalidaHorometro.map(function(e) {
                let valoresHorometroCuarentaSegunda = (e.totalHorometro);
                return valoresHorometroCuarentaSegunda;
            });

            // Suma Horometro
            var summed = 0;
            for (var key in Horometro) {
                summed = parseFloat(Horometro[key]) + summed;
            };

            var summedP = 0;
            console.log(HorometroPrimera);
            for (var key in HorometroPrimera) {
                summedP = parseFloat(Horometro[key]) + summedP;
            };

            var summedS = 0;
            console.log(HorometroSegunda);
            for (var key in HorometroSegunda) {
                summedS = parseFloat(Horometro[key]) + summedS;
            };

            $("#horometroTotal").html(summed.toFixed(2));

            $("#horometroPrimera").html(summedP.toFixed(2));
            $("#horometroSegunda").html(summedS.toFixed(2));

        }
    </script>

    <div class="col-6">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Horómetro</h5>
                <div class="row m-3">
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary">
                            Primera <span id="horometroPrimera" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            Segunda <span id="horometroSegunda" class="badge bg-secondary"></span>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" style="width: 100%; text-align: left;" class="btn btn-primary textEspacing">
                            Acumulado <span id="horometroTotal" class="badge bg-secondary"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Cartas de Mantenimiento</h5>
                <div class="row m-3">
                    <div class="col-12">
                        <h6 class="card-subtitle mb-2 text-muted">Cartas de mantenimiento 40Hr</h6>
                        <table id="cuarenta" class="table table-sm table-hover" cellspacing="0">
                            <thead class="">
                                <tr>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 5%;">No.</th>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Fecha</th>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Turno</th>
                                </tr>
                            </thead>
                            <p style="display:none;"> {{$contador=0}} </p>
                            <tbody>
                                @foreach($registroCartaCuarentaHoras as $datoCU)
                                <tr>
                                    <td>{{$contador = $contador + 1}}</td>
                                    <td>
                                        <?php
                                        date_default_timezone_set("America/Mexico_City");
                                        setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                                        $data['Fecha'] = $datoCU->cuarenta_Fecha;
                                        $marca = strtotime($data['Fecha']);
                                        ?>
                                        <?= strftime('%e/%B/%Y', $marca) ?>

                                    </td>
                                    <td> {{$datoCU->cuarenta_Turno}} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="col-12">
                        <h6 class="card-subtitle mb-2 text-muted">Cartas de mantenimiento 120Hr</h6>
                        <table id="cientoveinte" class="table table-sm table-hover" cellspacing="0">
                            <thead class="">
                                <tr>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 5%;">No.</th>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Fecha</th>
                                    <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 20%;">Turno</th>
                                </tr>
                            </thead>
                            <p style="display:none;"> {{$contador=0}} </p>
                            <tbody>
                                @foreach($registroCartaCientoVeinteHoras as $datoCV)
                                <tr>
                                    <td>{{$contador = $contador + 1}}</td>
                                    <td>
                                        <?php
                                        date_default_timezone_set("America/Mexico_City");
                                        setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                                        $data['Fecha'] = $datoCV->cientoVeinte_Fecha;
                                        $marca = strtotime($data['Fecha']);
                                        ?>
                                        <?= strftime('%e/%B/%Y', $marca) ?>
                                    </td>
                                    <td>{{$datoCV->cientoVeinte_Turno}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>