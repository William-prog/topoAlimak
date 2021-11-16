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
            <strong>Servicios y Equipos TOPO S.A de C.V</strong>
        </td>
    </tr>
    <tr>
        <td colspan="7">
            Procedimientos Administrativos
        </td>
        <td colspan="3">
            <strong>Código:</strong> LI-ADM-001-Rev.04
        </td>
    </tr>
    <tr>
        <td colspan="7">
            Lista de Asistencia
        </td>
        <td colspan="3">
            <strong>Fecha de emisión: </strong> {{date('d-m-Y')}}
        </td>
    </tr>
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top;">
    <tr>
        <td colspan="8">
            <strong>Equipo:</strong> Elevador Scando SE 1500
        </td>
        <td style="width: 25%;">
            <strong>Horómetro Inicial: </strong>
            @foreach($registros as $registro)
            @if($id== $registro->id)
            {{$registro->horometroIni}}
            @endif
            @endforeach
        </td>
        <td style="width: 30%;">
            <strong>No. Eco:</strong>
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <strong>Marca:</strong> ALIMAK
        </td>
        <td>
            <strong>Horómetro Final: </strong>
            @foreach($registros as $registro)
            @if($id== $registro->id)
            {{$registro->horometroFin}}
            @endif
            @endforeach
        </td>
        <td>
            <strong>Fecha: </strong>
            @foreach($registros as $registro)
            @if($id == $registro->id)
            {{$registro->fechaRegistro}}
            @endif
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <strong>Modelo:</strong> SCANDO SE 1500
        </td>
        <td colspan="2">
            <strong>Horómetro: </strong>
            @foreach($registros as $registro)
            @if($id== $registro->id)
            {{$registro->horometroRes}}
            @endif
            @endforeach
        </td>
    </tr>
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top;">
    <!--  -->
    <!--  -->
    <!--  -->
    <tr>
        <td style="width: 3%;" class="encabezado">
            No.
        </td>
        <td style="width: 7%;" class="encabezado">
            No.Emp.
        </td>
        <td style="width: 25%;" class="encabezado">
            Nombre del Usuario
        </td>
        <td style="width: 35%;" class="encabezado">
            Empresa
        </td>
        <td style="width: 7%;" class="encabezado">
            Hora de Entrada
        </td>
        <td style="width: 8%;" class="encabezado">
            Nivel de Servicio
        </td>
        <td style="width: 7%;" class="encabezado">
            Hora de Salida
        </td>
        <td style="width: 8%;" class="encabezado">
            Nivel de Servicio
        </td>
    </tr>
    {{$contador=0}}

    @foreach($registros as $registro)

    @if($registro->turno == $turno)
    <tr>
        <td class="centrar">
            {{$contador = $contador + 1}}
        </td>
        <td class="centrar">
            {{$registro->numeroEmpleado}}
        </td>
        <td class="izq">
            {{$registro->nombre}}
        </td>
        <td class="izq">
            {{$registro->empresa}}
        </td>
        <td class="centrar">
            {{$registro->horaEntrada}}
        </td>
        <td class="centrar">
            {{$registro->nivelTrabajo}}
        </td>
        <td class="centrar">
            {{$registro->horaSalida}}
        </td>
        <td class="centrar">
            @if($registro->nivelTrabajoS == '000-Superficie' )
            Superficie
            @endif
            @if($registro->nivelTrabajoS != '000-Superficie' )
            {{$registro->nivelTrabajoS}}
            @endif

        </td>
    </tr>
    @endif

    @endforeach
</table>

<br>

<table width="100%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd; vertical-align:text-top;">
    <!-- rowspan para abajo -->
    <!-- colspan para un lado -->
    <tr>
        <td style="width: 5%;" class="encabezado">
            Observaciones
        </td>
    </tr>
    @foreach($registros as $registro)
    @if($id == $registro->id)
    <tr>
        <td class="izq">
            {{$registro->observaciones}}
        </td>
    </tr>
    @endif
    @endforeach
</table>

<br>

<table width="100%" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse; border-color:#fff; vertical-align:text-top;">
    <!-- rowspan para abajo -->
    <!-- colspan para un lado -->
    @foreach($registros as $registro)
    @if($id== $registro->id)
    <tr>
        <td style="width: 11%;" class="izq">
            <strong>Elaboró:</strong>
        </td>
        <td style="width: 35%; padding-top: 2px;" class="izq">
            @if($registro->nomOperador == 'Amanda Robles Arango' )
            <img src="img/FirmaElena.jpg" width="150" height="">
            @endif
            @if($registro->nomOperador == 'Itzel Primavera Serrano Ortiz' )
            <img src="img/FirmaItzel.jpg" width="150" height="">
            @endif
            @if($registro->nomOperador == 'Sheccid Itzel Diaz Cadena' )
            <img src="img/FirmaSheccid.jpg" width="150" height="">
            @endif
        </td>
        <td class="izq">

        </td>
        <td style="width: 10%;" class="izq">
            <strong>Verificó:</strong>
        </td>
        <td style="width: 35%;" class="izq">
            @if($registro->verifico == 'Amanda Robles Arango' )
            <img src="img/FirmaElena.jpg" width="150" height="">
            @endif
            @if($registro->verifico == 'Itzel Primavera Serrano Ortiz' )
            <img src="img/FirmaItzel.jpg" width="150" height="">
            @endif
            @if($registro->verifico == 'Sheccid Itzel Diaz Cadena' )
            <img src="img/FirmaSheccid.jpg" width="150" height="">
            @endif
        </td>
    </tr>
    <tr>
        <td style="width: 11%;" class="izq">
        </td>
        <td style="width: 35%;;" class="izq">
            {{$registro->nomOperador}}
        </td>
        <td class="izq">

        </td>
        <td style="width: 10%;" class="izq">
        </td>
        <td style="width: 35%;" class="izq">
            {{$registro->verifico}}
        </td>
    </tr>
    <tr>
        <td colspan="5">
            .
        </td>
    </tr>
    <tr>
        <td style="width: 10%;" class="izq">
            <strong>Entrega Turno:</strong>
        </td>
        <td style="width: 35%;" class="izq">
            @if($registro->nomOperador == 'Amanda Robles Arango' )
            <img src="img/FirmaElena.jpg" width="150" height="">
            @endif
            @if($registro->nomOperador == 'Itzel Primavera Serrano Ortiz' )
            <img src="img/FirmaItzel.jpg" width="150" height="">
            @endif
            @if($registro->nomOperador == 'Sheccid Itzel Diaz Cadena' )
            <img src="img/FirmaSheccid.jpg" width="150" height="">
            @endif
        </td>
        <td class="izq">

        </td>
        <td style="width: 11%;" class="izq">
            <strong>Recibe Turno:</strong>
        </td>
        <td style="width: 35%;" class="izq">
            @if($registro->recibeTurno == 'Amanda Robles Arango' )
            <img src="img/FirmaElena.jpg" width="150" height="">
            @endif
            @if($registro->recibeTurno == 'Itzel Primavera Serrano Ortiz' )
            <img src="img/FirmaItzel.jpg" width="150" height="">
            @endif
            @if($registro->recibeTurno == 'Sheccid Itzel Diaz Cadena' )
            <img src="img/FirmaSheccid.jpg" width="150" height="">
            @endif
        </td>
    </tr>

    <tr>
        <td style="width: 10%;" class="izq">

        </td>
        <td style="width: 35%;" class="izq">
            {{$registro->nomOperador}}
        </td>
        <td class="izq">

        </td>
        <td style="width: 11%;" class="izq">

        </td>
        <td style="width: 35%;" class="izq">
            {{$registro->recibeTurno}}
        </td>
    </tr>
    @endif
    @endforeach
</table>