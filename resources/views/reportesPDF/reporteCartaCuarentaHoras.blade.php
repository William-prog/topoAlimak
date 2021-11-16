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
            {{$dato->cuarenta_Equipo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Marca:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cuarenta_Marca}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Núm. Eco:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cuarenta_NumE}}
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
            {{$dato->cuarenta_Tipo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Horómetro:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cuarenta_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Horario:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cuarenta_Horario}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Turno:
        </td>
        <td style="text-align: center;" colspan="">
            {{$dato->cuarenta_Turno}}
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
            Verificación a las placas
            de instrucciones y
            manuales de operación
            /mantenimiento.
        </td>
        <td colspan="" style="width: 50%;">
            Comprobar que todas las señales aplicables estén en los lugares establecidos.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_1_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_1_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Comprobar también que el libro de registro y el manual de operaciones y
            mantenimiento estén disponibles en el elevador o en el lugar.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_1_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_1_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Sustituir el libro de registro y el manual de operaciones y mantenimiento que falte
            si fuera necesario.

        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_1_3 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_1_3 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="4" style="width: 5%;">
            2
        </td>
        <td rowspan="4" style="width: 20%;">
            Verificación a el conjunto
            limitador de
            velocidad/paracaídas.
        </td>
        <td colspan="" style="width: 50%;">
            A través de los usuario del elevador informarse si el conjunto alguna vez ha
            actuado sin motivos aparentes, o si se ha observado algún ruido extraño durante el
            funcionamiento normal del elevador.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_2_0 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_2_0 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            a) Engrasar la cremallera
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_2_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_2_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            b) Asegurarse de que el cojinete deslizante del eje de salida no esté desgastado.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_2_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_2_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            c) Piñones. Engrasar los ejes de los piñones aplicando grasa en las tres boquillas
            por la parte posterior de la placa del paracaídas.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_2_3 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_2_3 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            3
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a el Reductor
            de descenso de
            emergencia.
        </td>
        <td colspan="" style="width: 50%;">
            Comprobar el nivel de aceite y rellenar si es necesario. En caso de fugas, el
            personal de mantenimiento cualificado/autorizado debe cambiar los retenes.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_3_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_3_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="2" style="width: 5%;">
            4
        </td>
        <td rowspan="2" style="width: 20%;">
            Verificación a los
            contrarodillos.
        </td>
        <td colspan="" style="width: 50%;">
            Verificación de contra rodillos de la placa del grupo tractor, ganchos de seguridad y
            rodillos situados en el marco de la cabina en el concepto de fijación (apriete).
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_4_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_4_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Verificación de condición física de tornillería según las recomendaciones el Manual
            de operación y mantenimiento.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_4_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_4_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            5
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación de la fijación
            del reductor.
        </td>
        <td colspan="" style="width: 50%;">
            Verificación de la fijación (apriete), condición física de tornillería según las
            recomendaciones el Manual de operación y mantenimiento.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_5_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_5_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            6
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a el motor
            eléctrico y frenos.
        </td>
        <td colspan="" style="width: 50%;">
            Verificación de parámetros de prueba referidos en el Manual de operación y
            mantenimiento.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_6_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_6_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="2" style="width: 5%;">
            7
        </td>
        <td rowspan="2" style="width: 20%;">
            Verificación a los
            interruptores principales y
            de emergencia.
        </td>
        <td colspan="" style="width: 50%;">
            Verificación de funcionalidad de los interruptores principales.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_7_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_7_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            Prueba de arranque de la cabina con cada uno de los interruptores desconectados.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_7_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_7_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            8
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a los
            controles de accionamiento
        </td>
        <td colspan="" style="width: 50%;">
            Verificar la funcionalidad del sistema de control por medio de la prueba de
            accionamiento desde la cabina y paradas activando la función "Stop Próxima
            Parada".
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_8_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_8_1 == 'No')
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
            de frenos del motor
            eléctrico.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar que el juego entre la armadura del electroimán y el disco rotativo se
            encuentren en los parámetros establecidos en la sección E10 del manual de
            operaciones y mantenimiento.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_9_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_9_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="2" style="width: 5%;">
            10
        </td>
        <td rowspan="2" style="width: 20%;">
            Verificación a los cables de
            fuerza motriz.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar condición física de deformación , daño o torsión.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_10_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_10_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            En el cable colgante inspeccionar la sujeción a el brazo porta cable de la cabina y
            al soporte del mástil con ubicación en el trole tensor referencia Manual de
            operación y mantenimiento.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_10_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_10_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="6" style="width: 5%;">
            11
        </td>
        <td rowspan="6" style="width: 20%;">
            Verificación a
            enclavamientos.
        </td>
        <td colspan="" style="width: 50%;">
            Verificar los enclavamientos de arranque de la cabina con:
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            a) Puerta de entrada de la cabina abierta.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_2 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_2 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            b) Puerta de salida de la cabina abierta.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_3 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_3 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            c) Con la trampilla del techo de la cabina abierta.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_4 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_4 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            d) Con cada puerta de parada abierta.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_5 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_5 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="" style="width: 50%;">
            e) Mientras se intentan abrir las puertas
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_6 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_11_6 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            12
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación a las
            condiciones estructurales y
            físicas del área útil (techo
            /suelo de cabina).
        </td>
        <td colspan="" style="width: 50%;">
            Verificación física del suelo , techo , barandilla , fijación, desgaste de los elementos
            y retiro de objetos sueltos o en malas condiciones.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_12_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_12_1 == 'No')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td rowspan="1" style="width: 5%;">
            13
        </td>
        <td rowspan="1" style="width: 20%;">
            Verificación del estado de
            engrase de Para el
            Reductor /nivel aceite
            hidráulico del tanque en
            donde el dispositivo de
            bloqueo haya actuado
            /cremallera/Conjunto
            limitador de
            velocidad/paracaídas
        </td>
        <td colspan="" style="width: 50%;">
            Verificación de la ejecución del proceso de engrase por el proveedor externo
            dispuesto en el Manual de operaciones y mantenimiento.
        </td>
        <td colspan="" style="border-top: 0px; border-bottom: 0px; width: 5%;">

        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_13_1 == 'Si')
            X
            @endif
        </td>
        <td colspan="" style="text-align: center; width: 10%;">
            @if($dato->cuarenta_13_1 == 'No')
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
            {{$dato->cuarentaOperadorForm}}
        </td>
        <!-- <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td> -->
        <!-- <td style="width: 15%;" colspan="">
            Núm:
        </td>
        <td colspan="">
            {{$dato->cuarenta_Marca}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Firma:
        </td>
        <td colspan="">
            {{$dato->cuarenta_NumE}}
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
            {{$dato->cuarentaVerificadorForm}}
        </td>
        <!-- <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td> -->
        <!-- <td style="width: 15%;" colspan="">
            Núm:
        </td>
        <td colspan="">
            {{$dato->cuarenta_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Firma:
        </td>
        <td colspan="">
            {{$dato->cuarenta_Horario}}
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
            {{$dato->cuarentaEncargadoForm}}
        </td>
        <!-- <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td> -->
        <!-- <td style="width: 15%;" colspan="">
            Núm:
        </td>
        <td colspan="">
            {{$dato->cuarenta_Horo}}
        </td>
        <td style="border-top: 0px; border-bottom: 0px; width: 5%;" colspan="">

        </td>
        <td style="width: 15%;" colspan="">
            Firma:
        </td>
        <td colspan="">
            {{$dato->cuarenta_Horario}}
        </td> -->
    </tr>
    @endforeach
</table>