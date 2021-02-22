@extends('layouts.plantillaL')

@section('contenido')
<h1>HORARIO SALIDAS</h1>
<div class="table-responsive">


    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>Compañia</th>
                <th>Número vuelo</th>
                <th>Hora</th>
                <th>Día Semana</th>
                <th>Destino</th>
            </tr>
        </thead>
        <tbody id="Salidas">
            <tr>
                @forelse ($vuSal as $item)
            <tr>

                <td>{{$item['airline']}}</td>
                <td>{{$item['numeroVuelo']}}</td>
                <td>{{$item['hora']}}</td>
                <td>{{$item['diaSemana']}}</td>
                <td>{{$item['destino']}}</td>

            </tr>

            @empty
            <li>nada</li>
            @endforelse
            </tr>
        </tbody>
    </table>
</div>
@endsection
