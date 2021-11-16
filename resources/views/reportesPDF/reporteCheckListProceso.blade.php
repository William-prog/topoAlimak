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
            Ubicación.
        </td>
        <td colspan="2" style="width: 13.33%; text-align: center;">
            ALIMAK
        </td>
        <td colspan="2" class="encabezado" style="width: 20%;">
            Operador.
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            {{$registro->clp_Operador}}
        </td>
        <td colspan="2" class="encabezado" style="width: 20%;">
            Fecha:
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            {{date('d-m-Y')}}
        </td>
        @endif
        @endforeach
    </tr>
    <tr>
        <td colspan="10">
            .
        </td>
    </tr>
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
            Modelo.
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
            SCANDO SE 1500
        </td>
        <td colspan="2" class="encabezado" style="width: 20%;">
            Marca
        </td>
        <td colspan="1" style="width: 13.33%; text-align: center;">
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
        <td colspan="1" class="encabezado" style="width: 90%; text-align: center;">
            Puntos de verificación del procedimiento de trabajo.
        </td>
        <td colspan="1" class="encabezado" style="width: 10%;">

        </td>
    </tr>
    <tr>
        @foreach($registros as $registro)
        @if($id== $registro->id)
        <td colspan="1" style="width: 90%;">

        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            Realizado
        </td>
        @endif
        @endforeach
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            1. Comunicación de la programación de las actividades para su realización. Reunión de Inicio de Trabajo (RIT).
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_1)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            2. Verificación de la bitácora/ informe de turno laboral.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_2)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            3. Verificación de la programación de acceso de personal.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_3)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            4. Apertura de la puerta de resguardo lateral del ascensor de personal.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_4)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            5. Elaboración de la lista de verificación de funcionalidad del ascensor de personal.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_5)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            6. Informe de condiciones de inicio de turno.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_6)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            7. Corregir cualquier situación de orden y limpieza en el área antes de comenzar a operar y/o sanitización del área.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_7)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            8. Conectar el interruptor principal situado en el armario eléctrico.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_8)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            9. Solicitar el ingreso del personal programado a trasladar.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_9)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            10. Verificar que el indicador de carga nominal (máxima) se encuentre en los parámetros permitidos.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_10)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            11. Prueba y cierre de las puertas del ascensor.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_11)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            12. Programación del nivel de descenso de los usuarios.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_12)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            13. Traslado del personal al nivel programado.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_13)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            14. Detener el ascensor en nivel de descenso.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_14)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            15. Esperar el descenso del personal para reiniciar el ciclo.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_15)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            16. Cierre de puertas y prueba funcionalidad.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_16)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            17. Orden y limpieza y sanitización.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_17)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            18. Esperar el descenso del personal para reiniciar el ciclo.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_18)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            19. Cierre de puertas y prueba funcionalidad.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_19)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="1" style="width: 90%;">
            20. Orden y limpieza y sanitización.
        </td>
        <td colspan="1" style="width: 10%; text-align: center;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_20)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="2" style="width: 100%;">
            Observaciones:
        </td>
    </tr>
    <tr>
        <td colspan="2" style="width: 100%;">
            @foreach($registros as $registro)
            @if('Si' == $registro->clp_Observaciones)
            <strong> X </strong>
            @endif
            @endforeach
        </td>
    </tr>
</table>