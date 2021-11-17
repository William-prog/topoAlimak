@extends('layouts.app')
@section('content')
<div class="container">
    <style>
        .jbotmio {
            border-radius: 7px;
            background-color: #eee
        }

        .centrado {
            text-align: center;
        }
    </style>
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

        .textEspacing {
            text-align: center;
            /* letter-spacing: -5px; */
            transition: letter-spacing 0.5s;
        }

        .textEspacing:hover {
            letter-spacing: 1px;
        }
    </style>



    <div class="form">
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col">
                    <button type="button" style="margin: auto;padding-bottom: 5px; background-color: #002973;" class="textEspacing btn btn-primary">
                        <h6 style="color: white;"> <strong> Horómetro acumulado: <span id="horometroCartaTres" style="background-color: white!important; color: black;" class="badge bg-secondary"></span> </strong> </h6>
                    </button>
                </div>
                <div class="form-group col">
                    <button type="button" style="margin: auto;padding-bottom: 5px; background-color: #002973;" class="textEspacing btn btn-primary">
                        <h6 style="color: white;"> <strong> Porcentaje: <span id="porcentajeCartaTres" style="background-color: white!important; color: black;" class="badge bg-secondary"></span> </strong> </h6>
                    </button>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-group col">
                    <div class="panel-body">
                        <div class="jbotmio">
                            <script>
                                // Obtencion de datos Horometro.
                                const jsonTopoHorometroCartaTres = <?php echo json_encode($horometroMilHoras) ?>;

                                var HorometroMilHoras = jsonTopoHorometroCartaTres.map(function(e) {
                                    let valoresHorometroMilHoras = (e.totalHorometro);
                                    return valoresHorometroMilHoras;
                                });

                                // Suma Horometro
                                var summedMilHoras = 0;
                                for (var key in HorometroMilHoras) {
                                    summedMilHoras = parseFloat(HorometroMilHoras[key]) + summedMilHoras;
                                    console.log(parseFloat(HorometroMilHoras[key]));
                                };

                                // summedMilHoras = summedMilHoras * -1;
                                console.log(summedMilHoras);

                                // Porcentaje
                                var porcentajeMilHoras = (summedMilHoras * 100) / 1000;

                                console.log(porcentaje);

                                // BARRA DE PROGRESO.
                                var progreso = 0;
                                var idIterval = setInterval(function() {
                                    $("#horometroCartaTres").html(summedMilHoras.toFixed(2));
                                    $("#porcentajeCartaTres").html(porcentajeMilHoras.toFixed(2) + '%');
                                    $('#barMilHoras').css('width', porcentajeMilHoras.toFixed(2) + '%');
                                }, 1000);
                            </script>
                            <div class="progress">
                                <div id="barMilHoras" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">0% Complete</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-group col">
                    <div class="middle" style="display: block;">
                        <a href="/cartaCartaMilHoras/create" style="cursor: pointer" id="saveBut" class="textEspacing btn btn1">{{ __('Registrar Carta     ') }}<i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-group col">
                    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

                    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
                    <script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

                    <script type="70cf02be0b65b144043f4959-text/javascript">
                        $(document).ready(function() {

                            var tablemil = $('#mil').DataTable({
                                pagingType: 'full_numbers',
                                pageLength: 10,
                                lengthMenu: [10, 15, 20, 100],
                                select: 'single',
                                "language": {
                                    "search": "Buscar&nbsp;:",
                                    "lengthMenu": "Mostrar _MENU_ Formularios",
                                    "zeroRecords": "Dato no encontrado",
                                    "info": "Pagina _PAGE_ de _PAGES_",
                                    "infoEmpty": "No hay formularios disponibles",
                                    "infoFiltered": "(filtrado de _MAX_ Formularios)",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "previous": "Anterior",
                                        "next": "Siguiente"
                                    },
                                    select: {
                                        rows: {
                                            _: ""
                                        }
                                    }
                                }
                            })
                        });
                    </script>

                    <table id="mil" class="table table-sm table-hover" cellspacing="0">
                        <thead class="">
                            <tr>
                                <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 5%;">No.</th>
                                <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Fecha</th>
                                <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 15%;">Supervisor</th>
                                <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 15%;">Empresa</th>
                                <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 20%;">Turno</th>
                                <th style="width: 10%;">PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <p style="display:none;"></p>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection