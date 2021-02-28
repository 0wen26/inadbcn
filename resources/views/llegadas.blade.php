@extends('layouts.plantillaL')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection


@section('contenido') <h1>HORARIO LLEGADAS</h1>


<table class="text-center table table-bordered display-nowrap" cellspacing="0" width="100%" id="Llegadas">
        <thead>
            <tr>
                <th>Compañia</th>
                <th>Número vuelo</th>
                <th>Hora</th>
                <th>Día Semana</th>
                <th>Destino</th>
            </tr>
        </thead>

    </table>


@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Llegadas').DataTable({
            responsive: true,
            "serverSide": true,
            "ajax":"{{url('search/llegadas')}}",
            "columns": [
                {data: 'airline'},
                {data:'numeroVuelo'},
                {data: 'hora'},
                {data: 'diaSemana'},
                {data: 'destino'},
            ]

        });

    });


</script>
@endsection
