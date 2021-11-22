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
            document.getElementById('fechaHorometro').value = ano + "-" + mes + "-" + dia;
        }
    </script>

    <h3 class="encabezado">Datos del Horómetro</h3>

    <div class="form">
        <div class="form-group">
            <div class="row mt-2">
                <div class="form-group col-4">
                    <div class="row mt-2">
                        <div class="form-group col-6">
                            <label for="fechaHorometro">Fecha: </label>
                            <input type="date" placeholder="00/00/000" class="form-control" name="fechaHorometro" id="fechaHorometro" required>
                        </div>
                        <div class="form-group col-6">
                            <div class="switch-field">
                                <div class="switch-title"> <strong> Turno: </strong> </div>
                                <input type="radio" id="switch_left" name="turnoHorometro" value="Primera" required />
                                <label for="switch_left">Primera</label>
                                <input type="radio" id="switch_right" name="turnoHorometro" value="Segunda" required />
                                <label for="switch_right">Segunda</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-6">
                            <label for="inicialHorometro">Horómetro Inicial: </label>
                            <input type="text" placeholder="000" class="form-control" name="inicialHorometro" id="inicialHorometro" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="finalHorometro">Horómetro Final: </label>
                            <input type="text" placeholder="000" class="form-control" name="finalHorometro" id="finalHorometro" required>
                        </div>
                    </div>
                </div>
                <div class="form-group col-8">
                    <br>
                    <table class="tabla tablaUsuarios round_table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 35%;">Fecha</th>
                                <th style="width: 35%;">Turno</th>
                                <th style="width: 35%;">Horómetro Inicial</th>
                                <th style="width: 35%;">Horómetro Final</th>
                                <th style="width: 35%;">Horómetro Total</th>
                            </tr>
                        </thead>
                        <tbody id="addRow" class="addRow">
                            @foreach($datosHorometro as $horometro)
                            <tr>
                                <td>
                                    <?php
                                    date_default_timezone_set("America/Mexico_City");
                                    setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                                    $data['Fecha'] = $horometro->fechaHorometro;
                                    $marca = strtotime($data['Fecha']);
                                    ?>
                                    <?= strftime('%e/%B/%Y', $marca) ?>
                                </td>
                                <td>
                                    {{$horometro->turnoHorometro}}
                                </td>
                                <td>
                                    {{$horometro->inicialHorometro}}
                                </td>
                                <td>
                                    {{$horometro->finalHorometro}}
                                </td>
                                <td>
                                    {{$horometro->totalHorometro}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @php
    $sumaCuarentaHoras=0;
    @endphp
    @foreach($horometroCuarentaHoras as $horometroacumulado)
    @php
    $sumaCuarentaHoras+=$horometroacumulado->totalHorometro;
    @endphp
    @endforeach

    @php
    $sumaCientoVeinteHoras=0;
    @endphp
    @foreach($horometroCientoVeinteHoras as $horometroacumulado)
    @php
    $sumaCientoVeinteHoras+=$horometroacumulado->totalHorometro;
    @endphp
    @endforeach

    @php
    $sumaMilHoras=0;
    @endphp
    @foreach($horometroMilHoras as $horometroacumulado)
    @php
    $sumaMilHoras+=$horometroacumulado->totalHorometro;
    @endphp
    @endforeach

    @php
    $sumaDosMilHoras=0;
    @endphp
    @foreach($horometroDosMilHoras as $horometroacumulado)
    @php
    $sumaDosMilHoras+=$horometroacumulado->totalHorometro;
    @endphp
    @endforeach

    <div class="form">
        <div class="form-group">
            <div class="row mt-2">
                <style>
                    .alertaHorometroDiv {
                        margin: auto;
                    }

                    .alertaHorometro {}

                    .alertaHorometro:hover {
                        background-color: red;

                        -webkit-transition: background-color 500ms linear;
                        -ms-transition: background-color 500ms linear;
                        transition: background-color 500ms linear;

                        border: 4 px solid rgba(255, 119, 31, 80%);

                        color: white;
                    }
                </style>

                @if($sumaCuarentaHoras >= 38)
                <div class="alertaHorometroDiv col-xl-4 col-lg-6 mb-4">
                    <div class="alertaHorometro rounded-lg p-1 shadow">
                        <div class="row mt-2">
                            <div class="col-2 text-right border-right">
                                <div class="h4 font-weight-bold mb-0"> <i class="fas fa-exclamation-circle fa-2x"></i> </div>
                            </div>
                            <div class="col-6 text-left">
                                <div class="h4 font-weight-bold mb-0"> Registrar </div><span class="small text-gray">Carta de Mantenimiento 40 Hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($sumaCientoVeinteHoras >= 118)
                <div class="alertaHorometroDiv col-xl-4 col-lg-6 mb-4">
                    <div class="alertaHorometro rounded-lg p-1 shadow">
                        <div class="row mt-2">
                            <div class="col-2 text-right border-right">
                                <div class="h4 font-weight-bold mb-0"> <i class="fas fa-exclamation-circle fa-2x"></i> </div>
                            </div>
                            <div class="col-6 text-left">
                                <div class="h4 font-weight-bold mb-0"> Registrar </div><span class="small text-gray">Carta de Mantenimiento 120 Hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($sumaMilHoras >= 995)
                <div class="alertaHorometroDiv col-xl-4 col-lg-6 mb-4">
                    <div class="alertaHorometro rounded-lg p-1 shadow">
                        <div class="row mt-2">
                            <div class="col-2 text-right border-right">
                                <div class="h4 font-weight-bold mb-0"> <i class="fas fa-exclamation-circle fa-2x"></i> </div>
                            </div>
                            <div class="col-6 text-left">
                                <div class="h4 font-weight-bold mb-0"> Registrar </div><span class="small text-gray">Carta de Mantenimiento 1000 Hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($sumaMilHoras >= 1995)
                <div class="alertaHorometroDiv col-xl-4 col-lg-6 mb-4">
                    <div class="alertaHorometro rounded-lg p-1 shadow">
                        <div class="row mt-2">
                            <div class="col-2 text-right border-right">
                                <div class="h4 font-weight-bold mb-0"> <i class="fas fa-exclamation-circle fa-2x"></i> </div>
                            </div>
                            <div class="col-6 text-left">
                                <div class="h4 font-weight-bold mb-0"> Registrar </div><span class="small text-gray">Carta de Mantenimiento 2000 Hrs</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($sumaCuarentaHoras < 38) 
                @if($sumaCientoVeinteHoras < 118) 
                @if($sumaMilHoras < 995) 
                @if($sumaMilHoras < 1995) 
                <div class="form-group col">
                    <div class="middle">
                        <button type="submit" style="cursor: pointer" class="btn btn1">
                        {{ __('Guardar Horómetro     ') }}<i class="fas fa-plus-circle"></i>
                    </button>
                    </div>
                </div>
                @endif
                @endif
                @endif
                @endif

            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
@endsection