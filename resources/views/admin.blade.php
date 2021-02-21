@extends('layouts.plantillaL')

@section('contenido')
<h1>Llegadas</h1>
<table class="table table-bordered table-sm">
    <thead>
        <tr>
            <th>Compañia</th>
            <th>Número vuelo</th>
            <th>Hora</th>
            <th>Día Semana</th>
            <th>Destino</th>
        </tr>
    </thead>
    <tbody id="LLegadas">
        <tr>
            @forelse ($info as $item)
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
@endsection
