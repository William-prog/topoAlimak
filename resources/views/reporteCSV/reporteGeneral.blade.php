<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
    }
</style>


<table>
    <tr>
        <td colspan="6" style="text-align: center; background-color: #404040; color: white;">
            <strong> Servicio Entrada/Salida/Totales por Contratista </strong>
        </td>
    </tr>
</table>
@include('reporteCSV.apartadoServicioContratistas')
<table>
    <tr>
        <td colspan="6" style="text-align: center; background-color: #404040; color: white;">
            <strong> Horómetros </strong>
        </td>
    </tr>
</table>
@include('reporteCSV.apartadoHorometros')
<br>