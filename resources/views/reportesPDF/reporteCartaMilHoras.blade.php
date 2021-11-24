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
            <strong>Servicios y Equipos TOPO S.A. de C.V.</strong>
        </td>
    </tr>
    <tr>
        <td colspan="7">
            Plan de mantenimiento para el Servicio de Trasporte de Personal en Elevador/Ascensor.
        </td>
        <td colspan="3">
            <strong>Código:</strong> CH-MTT-023-Rev.00-A19
        </td>
    </tr>
    <tr>
        <td colspan="7">
            Lista de verificación de mantenimiento a 40 horas Elevador/Ascensor ALIMAK SE1500
        </td>
        <td colspan="3">
            <strong>Fecha de emisión: </strong> {{date('d-m-Y')}}
        </td>
    </tr>
</table>
<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    @foreach($registros as $dato)
    <tr>
        <td style="width: 15%;" colspan="">
            Equipo:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->mil_Equipo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Marca:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->mil_Marca}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Núm. Eco:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->mil_NumE}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td colspan="">
            Fecha:
        </td>
        <td style="text-align: center;" colspan="">
            @foreach($registros as $registro)
            <?php
            date_default_timezone_set("America/Mexico_City");
            setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
            $data['Fecha'] = $registro->mil_Fecha;
            $marca = strtotime($data['Fecha']);
            ?>
            <?= strftime('%e/%B/%Y', $marca) ?>
            @endforeach
        </td>
    </tr>
    <tr>
        <td style="width: 15%;" colspan="">
            Tipo de Mant:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->mil_Tipo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Horómetro:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->mil_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Horario:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->mil_Horario}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Turno:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->mil_Turno}}
        </td>
    </tr>
    @endforeach
</table>
<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td colspan="" style="text-align: center; background-color: gainsboro; width: 5%;">
            Núm.
        </td>
        <td colspan="" style="text-align: center; background-color: gainsboro; width: 20%;">
            Elemento
        </td>
        <td colspan="" style="text-align: center; background-color: gainsboro; width: 50%;">
            Descripción de la actividad
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; background-color: gainsboro; width: 10%;">
            Si
        </td>
        <td colspan="" style="text-align: center; background-color: gainsboro; width: 10%;">
            No
        </td>
    </tr>
    @foreach($registros as $dato)
    <tr>
        <td rowspan="3" style="width: 5%;">
            1
        </td>
        <td rowspan="3" style="width: 20%;">
            Verificación a el
            acoplamiento.
        </td>
        <td colspan="" style="width: 50%;">
            Verificación de la detección de vibraciones.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_1_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_1_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Verificación de la detección de ruidos.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_1_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_1_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Verificación del juego entre motores y reductores, el ajuste debe de efectuarse por
            personal autorizado.

        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_1_3 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_1_3 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            2
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a el conjunto
            limitador de
            velocidad/paracaídas.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar los cables, prensaestopas y conexiones del exterior del armario eléctrico en
            su totalidad.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_2_0 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_2_0 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            3
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación del Relé térmico
            del guardamotor.
        </td>
        <td colspan="" style="width: 50%;">
            Asegurarse de que la tensión nominal marcada corresponde al de (de los) motores.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_3_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_3_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            4
        </td>
        <td rowspan="1" style="width: 20%;">
            Detección de deformaciones
            y daños mecánicos.
        </td>
        <td colspan="" style="width: 50%;">
            Inspeccionar visualmente la instalación en su totalidad para detectar deformaciones
            o daños mecánicos en secciones del mástil, arriostramientos, puertas, barandillas
            protectoras, suelo, las inspecciones deben ser efectuadas por personal de
            mantenimiento autorizado.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_4_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_4_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            5
        </td>
        <td rowspan="1" style="width: 20%;">
            Detección de Corrosión y
            desgaste.
        </td>
        <td colspan="" style="width: 50%;">
            Detectar la presencia de corrosión y desgaste en el cojinete de carga del mástil de
            elevación / los componentes de absorción de fuerzas, en caso de ser necesario
            utilizar equipo de medición ultrasónico, referencia Manual de operación y
            mantenimiento sección 3.13 Tubos del mástil.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_5_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_5_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            6
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación del mástil.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar que los pernos de unión entre las secciones, los tornillos de fijación de las
            cremalleras los pernos de unión entre el mástil y el marco base; referencia Manual
            de operación y mantenimiento sección 2. Par de apriete.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_6_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_6_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            7
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación de las guías
            de cable colgante.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar de forma manual la fijación de las guías de cable, la funcionalidad e
            instalación en el mástil en relación con el brazo de soporte del cable , el par de
            apriete a 22 Nm. La verificación se realizará en un 10% de las guías de cable, en
            caso de que se detecte alguna desviación, amplíe la comprobación a todas las guías
            de cable.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_7_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_7_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="3" style="width: 5%;">
            8
        </td>
        <td rowspan="3" style="width: 20%;">
            Verificación del freno
            centrifugo.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar el cumplimiento a los parámetros establecidos para el freno centrifugo y
            forros en el Manual de operación y mantenimiento sección E28.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_8_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_8_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            a) Reemplazar el forro de freno si el desgaste ha disminuido su grosor hasta 3 mm
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_8_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_8_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            b) Engrasar el dispositivo de control con Grasa Aeroshell 6 al
            volver a montar.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_8_3 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_8_3 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            9
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación del dispositivo
            de bloqueo en cabinas
            hidráulicas.
        </td>
        <td colspan="" style="width: 50%;">
            Sustitución de filtro de la ventilación de la unidad de alimentación según las
            característica de color.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_9_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_9_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            10
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a paneles de
            control.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar el estado físico, de fijación y de colocación de los componentes interno
            externo en su totalidad.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_10_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->mil_10_1 == 'No')
            X
            @endif
        </td>
    </tr>
    @endforeach
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td style="background-color: gainsboro;" colspan="">
            Observaciones:
        </td>
    </tr>
    @foreach($registros as $dato)
    <tr>
        <td colspan="">
            {{$dato->observaciones_Form}}
        </td>
    </tr>
    @endforeach
</table>
<br>
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    @foreach($registros as $dato)
    <tr>
        <td style="width: 15%; background-color: gainsboro;" colspan="">
            Operador:
        </td>
        <td style="width: 40%;" colspan="">
            {{$dato->milOperadorForm}}
        </td>
    </tr>
    @endforeach
</table>
<br>
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    @foreach($registros as $dato)
    <tr>
        <td style="width: 15%; background-color: gainsboro;" colspan="">
            Verificador:
        </td>
        <td style="width: 40%;" colspan="">
            {{$dato->milVerificadorForm}}
        </td>
    </tr>
    @endforeach
</table>
<br>
<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#ddd; vertical-align:text-top;">
    @foreach($registros as $dato)
    <tr>
        <td style="width: 15%; background-color: gainsboro;" colspan="">
            Encargado de área:
        </td>
        <td style="width: 40%;" colspan="">
            {{$dato->milEncargadoForm}}
        </td>
    </tr>
    @endforeach
</table>