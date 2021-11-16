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
            Lista de verificación de mantenimiento a 120 horas Elevador/Ascensor ALIMAK SE1500
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
            {{$dato->cientoVeinte_Equipo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Marca:
        </td>
        <td style="text-align: center;" colspan="">
            SCANDO
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Núm. Eco:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_NumE}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td colspan="">
            Fecha:
        </td>
        <td style="text-align: center;" colspan="">
            @foreach($registros as $registro)
            {{$registro->cientoVeinte_Fecha}}
            @endforeach
        </td>
    </tr>
    <tr>
        <td style="width: 15%;" colspan="">
            Tipo de Mant:
        </td>
        <td style="text-align: center;" colspan="">
            120 Hrs
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Horómetro:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Horario:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_Horario}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Turno:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_Turno}}
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
        <td rowspan="1" style="width: 5%;">
            1
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación de la
            estructura del mástil
        </td>
        <td colspan="" style="width: 50%;">
            Verificar que estén fijos y apretados los pernos de unión entre las secciones, los
            tornillos de fijación de la cremallera y los tornillos de unión para fijar el mástil en la
            placa base, referencia Manual de operación y mantenimiento sección 2. Par de
            apriete.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_1_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_1_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            2
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación de los
            arrostramientos.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar que los tornillos estén apretados en su totalidad y la fijación a la
            estructura; referencia Manual de operación y mantenimiento sección 2. Par de
            apriete.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_2_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_2_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="4" style="width: 5%;">
            3
        </td>
        <td rowspan="4" style="width: 20%;">
            Verificación de los
            Interruptores al final de
            recorrido y levas
            limitadoras.
        </td>
        <td colspan="" style="width: 50%;">
            Comprobar las posiciones y el funcionamiento de los interrumptores.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_3_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_3_1 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td colspan="" style="width: 50%;">
            Comprobar el funcionamiento realizando recorridos de prueba.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_3_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_3_2 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td colspan="" style="width: 50%;">
            Aflojar la fijación de los interruptores de final de recorrido inferior/ superior de la
            placa de la maquinaria (realizar puentes para los interruptores en el panel eléctrico).
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_3_3 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_3_3 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td colspan="" style="width: 50%;">
            Comprobar el interruptor de final de recorrido correspondiente.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_3_4 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_3_4 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td rowspan="1" style="width: 5%;">
            4
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación de las guías
            de cable colgante.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar de forma manual la fijación de las guías de cable, la funcionalidad e
            instalación en el mástil en relación con el brazo de soporte del cable , el par de
            apriete a 22 Nm. La verificación se realizará en un 10% de las guías de cable, en
            caso de que se detecte alguna desviación, amplíe la comprobación a todas las
            guías de cable
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_4_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_4_1 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td rowspan="5" style="width: 5%;">
            5
        </td>
        <td rowspan="5" style="width: 20%;">
            Verificación a el trole
            tensor.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar que el trole tensor no entre en contacto con el apoyo de los
            amortiguadores en el cercado base y que se deslice paralelamente a los tubos del
            mástil su funcionalidad.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_1 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td colspan="" style="width: 50%;">
            Verificar fijación
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Verificar el desgaste de los rodillos guía
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_3 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_3 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Verificar que la polea del cable motriz gire con suavidad.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_4 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_4 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Verificar la lubricación de los rodillos de plástico del trole tensor y el juego de los
            rodillos guía del trole tensor, referencia Manual de operación y mantenimiento
            sección E31.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_5 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_5_5 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            6
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación del foso base.
        </td>
        <td colspan="" style="width: 50%;">
            Retiro de escombros , caídos, limpieza , deteccion de fisuras o daños
            estructurales.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_6_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_6_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            7
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a los
            Amortiguadores.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar que los resortes se encuentren en el lugar previsto y en buenas
            condiciones.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_7_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_7_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            8
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a la
            funcionalidad de las
            puertas de cabina y parada
        </td>
        <td colspan="" style="width: 50%;">
            Verificar el funcionamiento de la señal de alarma, iluminación y el sistema de
            comunicación.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_8_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_8_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            9
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a el sistema
            de iluminación y señales de
            alarma.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar el funcionamiento de la señal de alarma, iluminación y el sistema de
            comunicación.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_9_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_9_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            10
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a el sistema
            de iluminación de
            emergencia.
        </td>
        <td colspan="" style="width: 50%;">
            Desconectar el interruptor principal del techo de la cabina ,comprobar que la luz de
            emergencia funcione, conectar el interruptor principal ,comprobar que el LED del
            cargador de batería esté encendido.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_10_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_10_1 == 'No')
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
            {{$dato->cientoVeinteObservacionesForm}}
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
            {{$dato->cientoVeinteOperadorForm}}
        </td>
        <!-- <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td> -->
        <!-- <td style="width: 15%;" colspan="">
            Núm:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Marca}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Firma:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_NumE}}
        </td> -->
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
            {{$dato->cientoVeinteVerificadorForm}}
        </td>
        <!-- <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td> -->
        <!-- <td style="width: 15%;" colspan="">
            Núm:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Firma:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Horario}}
        </td> -->
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
            {{$dato->cientoVeinteEncargadoForm}}
        </td>
        <!-- <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td> -->
        <!-- <td style="width: 15%;" colspan="">
            Núm:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Firma:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Horario}}
        </td> -->
    </tr>
    @endforeach
</table>

<!-- sssssssssssssssssssssssssssssssss -->
<!-- sssssssssssssssssssssssssssssssss -->
<div style="page-break-after:always;"></div>
<!-- sssssssssssssssssssssssssssssssss -->
<!-- sssssssssssssssssssssssssssssssss -->

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
            Lista de verificación de mantenimiento a 120 horas Elevador/Ascensor ALIMAK SE1500
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
            {{$dato->cientoVeinte_Equipo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Marca:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_Marca}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Núm. Eco:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_NumE}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td colspan="">
            Fecha:
        </td>
        <td style="text-align: center;" colspan="">
            2
        </td>
    </tr>
    <tr>
        <td style="width: 15%;" colspan="">
            Tipo de Mant:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_Tipo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Horómetro:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Horario:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_Horario}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Turno:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cientoVeinte_Turno}}
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
        <td rowspan="1" style="width: 5%;">
            1
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a el sistema
            de piñones y cremallera.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar el desgaste de acuerdo con los parameros del Manual de operación y
            mantenimiento en el capítulo “Ajustes y desgastes" sección E21.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_11_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_11_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            2
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación de barandales
            /cercados.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar la altura reglamentaria de los cercados, enclavamiento de las puertas de
            las plantas con relación a la cabina sea conforme a las instrucciones del Manual de
            operación y mantenimiento sección E47
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_12_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_12_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            3
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificacion de obstáculos
            próximos al elevador.
        </td>
        <td colspan="" style="width: 50%;">
            Verificación de las distancias entre las partes móviles y las fijas que pudieran
            representar un obstaculo a la unidad de traslado.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_13_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_13_1 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td rowspan="1" style="width: 5%;">
            4
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación de los rodillos
            guía.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar los rodillos (tipo bola) el desgaste, la holgura de los rodillos y justes.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_14_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_14_1 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td rowspan="1" style="width: 5%;">
            5
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a el Conjunto
            limitador de
            velocidad/paracaídas.
        </td>
        <td colspan="" style="width: 50%;">
            Efectuar la prueba de caída libre de acuerdo con lo indicado en el Manual de
            operación y mantenimiento sección E32.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_15_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_15_1 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td rowspan="4" style="width: 5%;">
            6
        </td>
        <td rowspan="4" style="width: 20%;">
            Verificación a el dispositivo
            de descenso /bajada de
            emergencia.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar la funcionalidad del dispositivo por prueba de descenso de emergencia
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_16_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_16_1 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td colspan="" style="width: 50%;">
            Observar que el tirador recupera su posición inicial después de la operación.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_16_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_16_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Las levas de reposición están presentes en cada parada.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_16_3 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_16_3 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            El elevador se detiene automáticamente en el nivel seleccionado de paro.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_16_4 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_16_4 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td rowspan="2" style="width: 5%;">
            7
        </td>
        <td rowspan="2" style="width: 20%;">
            Verificación a el motor(es)
            eléctrico(s).
        </td>
        <td colspan="" style="width: 50%;">
            Verificación física general de los elementos que lo componen.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_17_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_17_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Limpiar las aletas de refrigeración.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_17_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_17_2 == 'No')
            X
            @endif
        </td>
    </tr>

    <tr>
        <td rowspan="1" style="width: 5%;">
            8
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a el sistema
            de control de
            sobrecarga.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar que se efectué la prueba de sobrecarga para probar el sistema
            observando que no se produzcan chispas , engrase de los bulones de tracción y los
            muelles platillo.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_18_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_18_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            9
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a engrase.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar y realizar engrase en el conjunto guía del cable, puertas de paradas,
            enclavamientos y rampas, conjunto del freno centrífugo y cable de control
            referencia Manual de operaciones y mantenimiento sección Programa de engrase
            E40.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_19_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_19_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="2" style="width: 5%;">
            10
        </td>
        <td rowspan="2" style="width: 20%;">
            Verificación a frenos del motor.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar que se realice la prueba de estática , prueba de control de micro
            interruptor (si lo hubiera) para la función de apertura/cierra, referenciado en el
            Manual de operación y mantenimiento sección E10.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_20_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_20_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Prueba de control de micro interruptor (si lo hubiera) para la función de
            apertura/cierra, referenciado en el Manual de operación y mantenimiento sección
            E11.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_20_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cientoVeinte_20_2 == 'No')
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
            {{$dato->cientoVeinteObservacionesForm}}
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
            {{$dato->cientoVeinteOperadorForm}}
        </td>
        <!-- <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td> -->
        <!-- <td style="width: 15%;" colspan="">
            Núm:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Marca}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Firma:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_NumE}}
        </td> -->
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
            {{$dato->cientoVeinteVerificadorForm}}
        </td>
        <!-- <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td> -->
        <!-- <td style="width: 15%;" colspan="">
            Núm:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Firma:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Horario}}
        </td> -->
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
            {{$dato->cientoVeinteEncargadoForm}}
        </td>
        <!-- <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td> -->
        <!-- <td style="width: 15%;" colspan="">
            Núm:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Firma:
        </td>
        <td colspan="">
            {{$dato->cientoVeinte_Horario}}
        </td> -->
    </tr>
    @endforeach
</table>