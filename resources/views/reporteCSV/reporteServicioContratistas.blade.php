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
        <td class="" style="width: 5%;">
            <!-- espacio en blanco -->
        </td>
        <td class="" style="width: 10%; padding-left: 10px; padding-top: 1px; padding-right: 10px; border-right: 1px solid white;">
            <img src="img/topo-logo.jpg" width="50" height="">
        </td>
        <td colspan="8" style="border-left: 1px solid white;" class="image-container">
            <strong>Servicios y Equipos TOPO S.A de C.V</strong>
        </td>
    </tr>
    <tr>
        <td class="" style="width: 5%;">
            <!-- espacio en blanco -->
        </td>
        <td colspan="7" style="width: 20%;">
            Procedimientos Administrativos
        </td>
        <td colspan="3" style="width: 20%;">
            <strong>Código:</strong> LI-ADM-001-Rev.04
        </td>
    </tr>
    <tr>
        <td class="" style="width: 5%;">
            <!-- espacio en blanco -->
        </td>
        <td colspan="7">
            Lista de Servicio por Empresa
        </td>
        <td colspan="3">
            <strong>Fecha de emisión: </strong> {{date('d-m-Y')}}
        </td>
    </tr>

    <tr>
    </tr>

    <tr>
        <td class="" style="width: 5%;">
            <!-- espacio en blanco -->
        </td>
        <td colspan="7" style="">
            <strong>Equipo:</strong> Elevador Scando SE 1500
        </td>
        <td colspan="3" style="">
            <strong>Marca:</strong> ALIMAK SCANDO SE 1500
        </td>
    </tr>

    <tr>
    </tr>

    <tr>
        <td class="" style="width: 5%;">
            <!-- espacio en blanco -->
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> Fecha </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> TOPO </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> FERCONS </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> Fresnillo PLC </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> COYMSA </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> CLM </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> T.T.I </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> OMyTC </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> OSSA </strong>
        </td>

    </tr>

    @foreach($resultadoFechaTopo as $Topo)
    <tr>
        <td class="" style="width: 5%;">
            <!-- espacio en blanco -->
        </td>
        <td style="text-align: center;" class="centrar">
            <?php
            date_default_timezone_set("America/Mexico_City");
            setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
            $data['Fecha'] = $Topo->fechaRegistro;
            $marca = strtotime($data['Fecha']);
            ?>
            <?= strftime('%e/%B/%Y', $marca) ?>
        </td>

        <?php $contadorTopo = 0; ?>
        @foreach($datosTopo as $TopoCantidad)
        @if($Topo->fechaRegistro == $TopoCantidad->fechaRegistro)
        <?php $contadorTopo = $contadorTopo + 1 ?>
        @endif
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorTopo }}
            <?php $contadorTopo = 0; ?>
        </td>

        <?php $contadorFercons = 0; ?>
        @foreach($datosFercons as $FerconsCantidad)
        @if($Topo->fechaRegistro == $FerconsCantidad->fechaRegistro)
        <?php $contadorFercons = $contadorFercons + 1 ?>
        @endif
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorFercons }}
            <?php $contadorFercons = 0; ?>
        </td>

        <?php $contadorPlc = 0; ?>
        @foreach($datosPlc as $PlcCantidad)
        @if($Topo->fechaRegistro == $PlcCantidad->fechaRegistro)
        <?php $contadorPlc = $contadorPlc + 1 ?>
        @endif
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorPlc }}
            <?php $contadorPlc = 0; ?>
        </td>

        <?php $contadorCoymsa = 0; ?>
        @foreach($datosCoymsa as $CoymsaCantidad)
        @if($Topo->fechaRegistro == $CoymsaCantidad->fechaRegistro)
        <?php $contadorCoymsa = $contadorCoymsa + 1 ?>
        @endif
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorCoymsa }}
            <?php $contadorCoymsa = 0; ?>
        </td>

        <?php $contadorClm = 0; ?>
        @foreach($datosClm as $ClmCantidad)
        @if($Topo->fechaRegistro == $ClmCantidad->fechaRegistro)
        <?php $contadorClm = $contadorClm + 1 ?>
        @endif
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorClm }}
            <?php $contadorClm = 0; ?>
        </td>

        <?php $contadorTti = 0; ?>
        @foreach($datosTti as $TtiCantidad)
        @if($Topo->fechaRegistro == $TtiCantidad->fechaRegistro)
        <?php $contadorTti = $contadorTti + 1 ?>
        @endif
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorTti }}
            <?php $contadorTti = 0; ?>
        </td>

        <?php $contadorOmytc = 0; ?>
        @foreach($datosOmytc as $OmytcCantidad)
        @if($Topo->fechaRegistro == $OmytcCantidad->fechaRegistro)
        <?php $contadorOmytc = $contadorOmytc + 1 ?>
        @endif
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorOmytc }}
            <?php $contadorOmytc = 0; ?>
        </td>

        <?php $contadorOssa = 0; ?>
        @foreach($datosOssa as $OssaCantidad)
        @if($Topo->fechaRegistro == $OssaCantidad->fechaRegistro)
        <?php $contadorOssa = $contadorOssa + 1 ?>
        @endif
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorOssa }}
            <?php $contadorOssa = 0; ?>
        </td>

    </tr>
    @endforeach

    <tr>
    </tr>

    <tr>
        <td class="" style="width: 5%;">
            <!-- espacio en blanco -->
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> TOTAL </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> TOPO </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> FERCONS </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> Fresnillo PLC </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> COYMSA </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> CLM </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> T.T.I </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> OMyTC </strong>
        </td>
        <td style="text-align: center;" class="centrar">
            <strong> OSSA </strong>
        </td>
    </tr>


    <tr>
        <td class="" style="width: 5%;">
            <!-- espacio en blanco -->
        </td>
        <td style="text-align: center;" class="centrar">
            Total
        </td>
        <?php $contadorTotalTopo = 0; ?>
        @foreach($resultadoFechaTopo as $Topo)
        @foreach($datosTopo as $TopoCantidad)
        @if($Topo->fechaRegistro == $TopoCantidad->fechaRegistro)
        <?php $contadorTotalTopo = $contadorTotalTopo + 1 ?>
        @endif
        @endforeach
        @endforeach

        <td style="text-align: center;" class="centrar">
            {{ $contadorTotalTopo }}
        </td>

        <?php $contadorTotalFercons = 0; ?>
        @foreach($resultadoFechaTopo as $Topo)
        @foreach($datosFercons as $FerconsCantidad)
        @if($Topo->fechaRegistro == $FerconsCantidad->fechaRegistro)
        <?php $contadorTotalFercons = $contadorTotalFercons + 1 ?>
        @endif
        @endforeach
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorTotalFercons }}
        </td>

        <?php $contadorTotalPlc = 0; ?>
        @foreach($resultadoFechaTopo as $Topo)
        @foreach($datosPlc as $PlcCantidad)
        @if($Topo->fechaRegistro == $PlcCantidad->fechaRegistro)
        <?php $contadorTotalPlc = $contadorTotalPlc + 1 ?>
        @endif
        @endforeach
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorTotalPlc }}
        </td>

        <?php $contadorTotalCoymsa = 0; ?>
        @foreach($resultadoFechaTopo as $Topo)
        @foreach($datosCoymsa as $CoymsaCantidad)
        @if($Topo->fechaRegistro == $CoymsaCantidad->fechaRegistro)
        <?php $contadorTotalCoymsa = $contadorTotalCoymsa + 1 ?>
        @endif
        @endforeach
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorTotalCoymsa }}
        </td>

        <?php $contadorTotalClm = 0; ?>
        @foreach($resultadoFechaTopo as $Topo)
        @foreach($datosClm as $ClmCantidad)
        @if($Topo->fechaRegistro == $ClmCantidad->fechaRegistro)
        <?php $contadorTotalClm = $contadorTotalClm + 1 ?>
        @endif
        @endforeach
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorTotalClm }}
        </td>

        <?php $contadorTotalTti = 0; ?>
        @foreach($resultadoFechaTopo as $Topo)
        @foreach($datosTti as $TtiCantidad)
        @if($Topo->fechaRegistro == $TtiCantidad->fechaRegistro)
        <?php $contadorTotalTti = $contadorTotalTti + 1 ?>
        @endif
        @endforeach
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorTotalTti }}
        </td>

        <?php $contadorTotalOmytc = 0; ?>
        @foreach($resultadoFechaTopo as $Topo)
        @foreach($datosOmytc as $OmytcCantidad)
        @if($Topo->fechaRegistro == $OmytcCantidad->fechaRegistro)
        <?php $contadorTotalOmytc = $contadorTotalOmytc + 1 ?>
        @endif
        @endforeach
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorTotalOmytc }}
        </td>

        <?php $contadorTotalOssa = 0; ?>
        @foreach($resultadoFechaTopo as $Topo)
        @foreach($datosOssa as $OssaCantidad)
        @if($Topo->fechaRegistro == $OssaCantidad->fechaRegistro)
        <?php $contadorTotalOssa = $contadorTotalOssa + 1 ?>
        @endif
        @endforeach
        @endforeach
        <td style="text-align: center;" class="centrar">
            {{ $contadorTotalOssa }}
        </td>

    </tr>
</table>