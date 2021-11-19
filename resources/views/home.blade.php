@extends('layouts.app')

@section('content')


<div class="container py-5">

    <style>
        .cardManteniemito:hover {
            background-color: #3D3D3D;
            -webkit-transition: background-color 500ms linear;
            -ms-transition: background-color 500ms linear;
            transition: background-color 500ms linear;

            border: 4 px solid rgba(255, 119, 31, 80%);

            color: white;
        }
    </style>

    <div class="row">
        <!-- For demo purpose -->
        <div class="col-lg-12 mx-auto mb-5 text-black text-center">
            <h1 class="display-4">Cartas de mantenimiento</h1>
        </div>
        <!-- END -->

        <div class="col-xl-3 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">40 Horas</h2>

                @php
                $sumaCuarentaHoras=0;
                @endphp
                @foreach($horometroCuarentaHoras as $horometroacumulado)
                @php
                $sumaCuarentaHoras+=$horometroacumulado->totalHorometro;
                @endphp
                @endforeach

                <!-- Progress bar 1 -->
                <div role="progressbarCircle" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ round(($sumaCuarentaHoras * 100) / 40) }} ; margin:auto;"></div>
                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <div class="h4 font-weight-bold mb-0">{{ $sumaCuarentaHoras }}</div><span class="small text-gray">Hrs Trabajadas</span>
                    </div>
                    <div class="col-6">
                        <div class="h4 font-weight-bold mb-0">{{ round(40 - $sumaCuarentaHoras, 2) }}</div><span class="small text-gray">Hrs Faltantes</span>
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">120 Horas</h2>

                @php
                $sumaCientoVeinteHoras=0;
                @endphp
                @foreach($horometroCientoVeinteHoras as $horometroacumulado)
                @php
                $sumaCientoVeinteHoras+=$horometroacumulado->totalHorometro;
                @endphp
                @endforeach

                <!-- Progress bar 2 -->
                <div role="progressbarCircle" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ round(($sumaCientoVeinteHoras * 100) / 120) }} ; margin:auto;"></div>
                <!-- END -->

                <!-- Demo info-->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <div class="h4 font-weight-bold mb-0">{{ $sumaCientoVeinteHoras }}</div><span class="small text-gray">Hrs Trabajadas</span>
                    </div>
                    <div class="col-6">
                        <div class="h4 font-weight-bold mb-0">{{ round(120 - $sumaCientoVeinteHoras, 2) }}</div><span class="small text-gray">Hrs Faltantes</span>
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">1000 Horas</h2>

                <!-- Progress bar 3 -->
                @php
                $sumaMilHoras=0;
                @endphp
                @foreach($horometroMilHoras as $horometroacumulado)
                @php
                $sumaMilHoras+=$horometroacumulado->totalHorometro;
                @endphp
                @endforeach

                <div role="progressbarCircle" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ round(($sumaMilHoras * 100) / 1000) }}; margin:auto;"></div>
                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <div class="h4 font-weight-bold mb-0">{{ $sumaMilHoras }}</div><span class="small text-gray">Hrs Trabajadas</span>
                    </div>
                    <div class="col-6">
                        <div class="h4 font-weight-bold mb-0">{{ round(1000 - $sumaMilHoras, 2) }}</div><span class="small text-gray">Hrs Faltantes</span>
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 mb-4">
            <div class=" rounded-lg p-5 shadow cardManteniemito">
                <h2 class="h6 font-weight-bold text-center mb-4">2000 Horas</h2>

                <!-- Progress bar 4 -->
                @php
                $sumaDosMilHoras=0;
                @endphp
                @foreach($horometroDosMilHoras as $horometroacumulado)
                @php
                $sumaDosMilHoras+=$horometroacumulado->totalHorometro;
                @endphp
                @endforeach

                <div role="progressbarCircle" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ round(($sumaDosMilHoras * 100) / 2000) }}; margin:auto;"></div>
                <!-- END -->

                <!-- Demo info -->
                <div class="row text-center mt-4">
                    <div class="col-6 border-right">
                        <div class="h4 font-weight-bold mb-0">{{ $sumaDosMilHoras }}</div><span class="small text-gray">Hrs Trabajadas</span>
                    </div>
                    <div class="col-6">
                        <div class="h4 font-weight-bold mb-0">{{ round(2000 - $sumaDosMilHoras, 2) }}</div><span class="small text-gray">Hrs Faltantes</span>
                    </div>
                </div>
                <!-- END -->
            </div>
        </div>
    </div>
</div>
@endsection