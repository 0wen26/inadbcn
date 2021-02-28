@extends('layouts.plantillaL')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('insert')
<form class="form-inline" method="post" id="insertar" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">

    <div class="form-group mx-sm-3 mb-2">
        <label for="airline" class="sr-only">airline</label>
        <input type="text" id="airline" placeholder="Compañia">
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="numVuelo" class="sr-only">numVuelo</label>
        <input type="text" class="form-control-plaintext" id="numVuelo" placeholder="numVuelo">
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="Hora" class="sr-only">Hora</label>
        <input type="time" name="hora" id="hora">
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="diaSemana" class="sr-only">Dia Semana</label>
        <select multiple class="form-control" id="diaSemana">
            <option>Lunes</option>
            <option>Martes</option>
            <option>Miercoles</option>
            <option>Jueves</option>
            <option>Viernes</option>
            <option>Sabado</option>
            <option>Domingo</option>
        </select>
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="destino" class="sr-only">Destino</label>
        <input type="text" class="form-control-plaintext" id="destino" placeholder="Destino">
    </div>
    <button type="submit" class="btn btn-primary mb-2"> Insertar </button>
</form>


@endsection
@section('contenido')
<h1>HORARIO SALIDAS</h1>

<table class="text-center table table-bordered display-nowrap" cellspacing="0" width="100%" id="Salidas">
    <thead>
        <tr>

            <th>Compañia</th>
            <th>Número vuelo</th>
            <th>Hora</th>
            <th>Día Semana</th>
            <th>Destino</th>
            <th>editar</th>
            <th>eliminar</th>

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
        $('#Salidas').DataTable({
            responsive: true,
            serverSide: true,
             ajax: "{{url('search/salidas')}}",
            columns: [
                {data: 'airline'},
                {data:'numeroVuelo'},
                {data: 'hora'},
                {data: 'diaSemana'},
                {data: 'destino'},
                {data: 'edit'},
                {data: 'delete'},
            ]

        });

    });

    $('#insertar').submit(function (e) {
                //event.preventDefault();
                var diaSemana = $('#diaSemana').val();

                //var descripcion = $("textarea[name=descripcion]").val();
                     $.ajax({
                    url: "/salidas",
                    type: 'post',
                    data:{
                        _token: $("#csrf").val(),
                         type: 1,
                         data: 'diaSemana',

                    },
                    cache: false,
                    success:function(dataResult){
                        console.log(dataResult);
                    }

                });
                });

</script>
@endsection
