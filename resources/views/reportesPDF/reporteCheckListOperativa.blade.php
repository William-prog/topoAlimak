<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
    }
</style>

<style>
    .encabezado {
        font-weight: bold;
        background-color: gainsboro;
        text-align: center;
    }

    .centrar {
        text-align: center;
    }

    .izq {
        text-align: left;
    }
</style>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td class="" style="width: 10%; padding-left: 10px; padding-top: 1px; padding-right: 10px; border-right: 1px solid white;">
            <img src="img/topo-logo.jpg" width="50" height="">
        </td>
        <td colspan="9" style="border-left: 1px solid white;" class="image-container">
            <strong>SERVICIO DE TRANSPORTE DE PERSONAL EN ELEVADOR/ASCENSOR ALIMAK SE1500</strong>
        </td>
    </tr>
    <tr>
        <td colspan="7">
            Plan operativo para el Servicio de trasporte de personal en elevador/ascensor ALIMAK SE1500.
        </td>
        <td colspan="3">
            <strong>Código:</strong> CH-MT-023-Rev.00-A1
        </td>
    </tr>
    <tr>
        <td colspan="7">
            Lista de verificación de inicio de operación del elevador/ascensor ALIMAK SE1500.
        </td>
        <td colspan="3">
            <strong>Fecha de emisión: </strong> {{date('d-m-Y')}}
        </td>
    </tr>
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top;">
    <tr>
        @foreach($registros as $registro)
        @if($id== $registro->id)
        <td colspan="2" class="encabezado" style="width: 20%;">
            Equipo.
        </td>
        <td colspan="2" style="width: 13.33%; text-align: center;">
            Elevador/ascensor de personal
        </td>
        <td colspan="2" class="encabezado" style="width: 20%;">
            No. Eco:
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            {{$registro->clo_Eco}}
        </td>
        <td colspan="2" class="encabezado" style="width: 20%;">
            Fecha:
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            <?php
            date_default_timezone_set("America/Mexico_City");
            setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
            $data['Fecha'] = $registro->clo_Fecha;
            $marca = strtotime($data['Fecha']);
            ?>
            <?= strftime('%e/%B/%Y', $marca) ?>
        </td>
        @endif
        @endforeach
    </tr>
    <tr>
        @foreach($registros as $registro)
        @if($id== $registro->id)
        <td colspan="2" class="encabezado" style="width: 20%;">
            Modelo.
        </td>
        <td colspan="2" style="width: 13.33%; text-align: center;">
            SCANDO SE 1500
        </td>
        <td colspan="2" class="encabezado" style="width: 20%;">
            Horómetro:
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            {{$registro->clo_Horo}}
        </td>
        <td colspan="2" class="encabezado" style="width: 20%;">
            Turno:
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            {{$registro->clo_Turno}}
        </td>
        @endif
        @endforeach
    </tr>

    <tr>
        @foreach($registros as $registro)
        @if($id== $registro->id)
        <td colspan="2" class="encabezado" style="width: 20%;">
            Marca
        </td>
        <td colspan="8" style="width: 13.33%;">
            ALIMAK
        </td>
        @endif
        @endforeach
    </tr>
</table>
<br>
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top;">
    <!--  -->
    <!--  -->
    <!--  -->
    <tr>
        <td colspan="1" rowspan="13" style="width: 50% !important;">
            <!-- <img src="img/topo-logo.jpg" width="50" height=""> -->
            <img src="img/alimak.jpg" height="200" alt="">
            <p style="color: #fff;"> Lorem ipsum dolor sit ame sit ame sit ame sit ame sit ame</p>
        </td>
        <td colspan="2" class="encabezado" style="width: 50%">
            Inspección diaria antes de la operación/funcionamiento:
        </td>
    </tr>
    <tr>
        @foreach($registros as $registro)
        @if($id== $registro->id)
        <td colspan="1" style="width: 25%;">

        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            Realizado
        </td>
        @endif
        @endforeach
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            1. Verificar foza y bombeo.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Verificar_foza)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            2. Verificar botones de paro "stop".
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Verificar_botones_stop)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            3. Verificar Microinterruptores de la puerta de entrada de cabina.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Micros_puerta_entrada)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            3. Verificar Microinterruptores de la puerta de entrada de cabina.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Micros_puerta_entrada)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            4. Verificar Microinterruptores de la puerta de salida.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Micros_puerta_salida)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            5. Verificar Microinterruptores de puerta de desembarque.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Micros_desembarque)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            5. Verificar Microinterruptores de puerta de desembarque.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Micros_desembarque)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            6. Verificar que este funcionando la línea telefónica.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Verificar_telefonica)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            7. Verificar sentido del aire.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Comprobar_aire)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            8. Comprobar intercierres mecánicos.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Comprobar_intercierres)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 25%;">
            9. Comprobar palanca de liberación de freno.
        </td>
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Verificar_palanca)
            X
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" rowspan="3" style="width: 50% !important;">
            @foreach($registros as $registro)
            {{$registro->clo_Observaciones}}
            @endforeach
        </td>
        <td colspan="1" style="width: 25%;">
            10. Comprobar en cada parada que las puertas se puedan abrir / cerrar, y que queden bloqueadas después del cierre.
        <td colspan="1" class="encabezado" style="width: 25%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Verificar_puertas)
            X
            @endif
            @endforeach
        </td>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="encabezado" style="width: 50%;">
            Verificar los puntos uno a la vez.
        </td>
    </tr>
    <tr>
        <td colspan="2" class="encabezado" style="width: 50%;">
            El equipo debe de estar apagado durante la verificación.
        </td>
    </tr>
</table>
<br>
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td colspan="5" class="encabezado" style="width: 20%;">
            Verificación visual.
        </td>
    </tr>
    <tr>
        @foreach($registros as $registro)
        @if($id== $registro->id)
        <td colspan="1" class="" style="width: 20%;">
            1. Verificar que las guías de cables estén completos y en su lugar.
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center; ">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Verificar_guias)
            X
            @endif
            @endforeach
        </td>
        <td colspan="1" class="" style="width: 20%;">

        </td>
        <td colspan="1" style="width: 13.33%;">
            5. El elevador esté libre de equipos no asociados con el mismo.
        </td>
        <td colspan="1" class="" style="width: 20%;  text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Elevador)
            X
            @endif
            @endforeach
        </td>
        @endif
        @endforeach
    </tr>

    <tr>
        @foreach($registros as $registro)
        @if($id== $registro->id)
        <td colspan="1" class="" style="width: 20%;">
            2. Verificar que los interruptores y las levas limitadores estén completos y en su lugar.
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Verificar_interruptores)
            X
            @endif
            @endforeach
        </td>
        <td colspan="1" class="" style="width: 20%;">

        </td>
        <td colspan="1" style="width: 13.33%;">
            6. El recorrido y el cerco estén libres de objetos extraños.
        </td>
        <td colspan="1" class="" style="width: 20%;  text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Recorrido)
            X
            @endif
            @endforeach
        </td>
        @endif
        @endforeach
    </tr>
    <tr>
        @foreach($registros as $registro)
        @if($id== $registro->id)
        <td colspan="1" class="" style="width: 20%;">
            3. Verificar orden y limpieza.
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Verificar_orden)
            X
            @endif
            @endforeach
        </td>
        <td colspan="1" class="" style="width: 20%;">

        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">

        </td>
        <td colspan="1" class="" style="width: 20%;">

        </td>
        @endif
        @endforeach
    </tr>
    <tr>
        @foreach($registros as $registro)
        @if($id== $registro->id)
        <td colspan="1" class="" style="width: 20%;">
            4. Verificar grado de desgatse del freno.
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clo_Verificar_grado)
            X
            @endif
            @endforeach
        </td>
        <td colspan="1" class="" style="width: 20%;">

        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">

        </td>
        <td colspan="1" class="" style="width: 20%;">

        </td>
        @endif
        @endforeach
    </tr>
</table>