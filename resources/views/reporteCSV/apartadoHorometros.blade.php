<table>
    <!--  -->
    <!--  -->
    <!--  -->
    <tr>
        <td style="text-align: center; background-color: #938F8F; ">
            <strong> No. </strong>
        </td>
        <td style="text-align: center; background-color: #938F8F; ">
            <strong> Fecha </strong>
        </td>
        <td style="text-align: center; background-color: #938F8F; width: 90px;">
            <strong> Turno </strong>
        </td>
        <td style="text-align: center; background-color: #938F8F; width: 90px;">
            <strong> H* . Inicial </strong>
        </td>
        <td style="text-align: center; background-color: #938F8F; width: 90px;">
            <strong> H* . Final </strong>
        </td>
        <td style="text-align: center; background-color: #938F8F; width: 90px;">
            <strong> H* . Total </strong>
        </td>
    </tr>
    {{$contador=0}}
    @foreach($datosGeneralesHorometro as $registro)
    <tr>
        <td style="text-align: center;">
            {{$contador= $contador + 1;}}
        </td>
        <td style="text-align: center;">
            <?php
            date_default_timezone_set("America/Mexico_City");
            setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
            $data['Fecha'] = $registro->fechaHorometro;
            $marca = strtotime($data['Fecha']);
            ?>
            <?= strftime('%e/%b/%Y', $marca) ?>
        </td>
        <td style="text-align: center;">
            {{$registro->turnoHorometro;}}
        </td>
        <td style="text-align: center;">
            {{$registro->inicialHorometro;}}
        </td>
        <td style="text-align: center;">
            {{$registro->finalHorometro;}}
        </td>
        <td style="text-align: center;">
            {{$registro->totalHorometro;}}
        </td>
    </tr>
    @endforeach
</table>