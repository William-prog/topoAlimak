<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous" type="70cf02be0b65b144043f4959-text/javascript"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.css" />
<script type="70cf02be0b65b144043f4959-text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>

<script type="70cf02be0b65b144043f4959-text/javascript">
    $(document).ready(function() {
        var tableSeguridad = $('#Seguridad').DataTable({
            pagingType: 'full_numbers',
            pageLength: 10,
            lengthMenu: [10, 15, 20, 100],
            select: 'single',
            "language": {
                "search": "Buscar&nbsp;:",
                "lengthMenu": "Mostrar _MENU_ Formularios",
                "zeroRecords": "Dato no encontrado",
                "info": "Pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay formularios disponibles",
                "infoFiltered": "(filtrado de _MAX_ Formularios)",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "previous": "Anterior",
                    "next": "Siguiente"
                },
                select: {
                    rows: {
                        _: ""
                    }
                }
            }
        })
    });
</script>

<table id="Seguridad" class="table table-sm table-hover" cellspacing="0">
    <thead class="">
        <tr>
            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 5%;">No.</th>
            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 10%;">Fecha</th>
            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 15%;">Encargado</th>
            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 15%;">Verificador</th>
            <th style="position: sticky; top: 0; background-color: #FEFCFB !important; width: 20%;">Cumplimiento</th>
            <th style="width: 10%;">PDF</th>
        </tr>
    </thead>
    <tbody>
        <p style="display:none;"> {{$contador=0}} </p>
        @foreach($registroCheckListSeguridad as $registro)
        <tr>
            <td>{{$contador = $contador + 1}}</td>
            <td>
                <?php
                date_default_timezone_set("America/Mexico_City");
                setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
                $data['Fecha'] = $registro->cls_Fecha;
                $marca = strtotime($data['Fecha']);
                ?>
                <?= strftime('%e/%B/%Y', $marca) ?>
            </td>
            <td>{{$registro->cls_Encargado}} </td>
            <td>{{$registro->cls_Verificador}} </td>
            <td>
                <script>
                    // var siSeguridad = <?php echo $registro->SeleccionadosSeguridadSi ?>;
                    // var porcentajeSeguridad = (siSeguridad * 100) / 168;
                    // // BARRA DE PROGRESO.
                    // $(document).ready(function() {
                    //     $("#porcentaje").html(porcentajeSeguridad.toFixed(2) + '%');
                    //     $('#barSeguridad').css('width', porcentajeSeguridad.toFixed(2) + '%');
                    // });
                </script>

                <div class="progressCheckList">
                    <div id="barSeguridad" class="progress-bar-CheckList progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ((intval($registro->SeleccionadosSeguridadSi) * 100) / 168) ?>%">
                        <span class="sr-only">0% Complete</span>
                    </div>
                </div>

            </td>
            <td>
                <a style="width: 80%; font-size: 0.8vw;" href="{{ url('/generarReporteSeguridad/PDF/'.$registro->id) }}" target="_blank" class="btn btn-warning">
                    Generar PDF
                    <i style="color: red;" class="fas fa-file-pdf" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>