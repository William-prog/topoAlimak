<table id="register" class="table table-sm table-hover" cellspacing="0">
    <thead class="">
        <tr>
            <th style="width: 5%;">Fecha</th>
            <th style="width: 10%;">Fecha</th>
            <th style="width: 15%;">Operador</th>
            <th style="width: 15%;">Encargado</th>
            <th style="width: 20%;">Empresa</th>
            <th style="width: 10%;">Turno</th>
            <th style="width: 10%;">Estado</th>
        </tr>
    </thead>
    <p style="display:none;"> {{$contador=0}} </p>
    <tbody>
        @foreach($registrosOpe as $registro)
        @if($registro->id == $registro->idForanea)
        <tr>
            <td>{{$contador = $contador + 1}}</td>
            <td>
                <?php
                date_default_timezone_set("America/Mexico_City");
                setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                $data['Fecha'] = $registro->fechaRegistro;
                $marca = strtotime($data['Fecha']);
                ?>
                <?= strftime('%e/%B/%Y', $marca) ?>
            </td>
            <td> {{$registro->nomOperador}} </td>
            <td> {{$registro->encargado}} </td>
            <td> {{$registro->empresa}} </td>
            <td> {{$registro->turno}} </td>
            <td>
                <div class="form">
                    <div class="form-group">
                        <div class="row mt-1">
                            <div style="margin-left: 5%; padding: 1px; margin-bottom: 0rem !important" class="form-group col">
                                @if($registro->horaSalida == '---')
                                <a style="width: 83%; padding-left: 4%; font-size: 0.8vw;" href="{{ url('/servicio/'.$registro->idForanea.'/edit')}}" class="btn btn-danger">
                                    Cerrar Registro
                                </a>
                                @endif
                                @if($registro->horaSalida != '---')
                                <div style="margin-bottom: -6%; text-align: center; width: 83%; padding: 4%; font-size: 0.8vw;" class="alert alert-success" role="alert">
                                    <strong> Terminado </strong>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            @endif
            @endforeach
        </tr>
    </tbody>
</table>