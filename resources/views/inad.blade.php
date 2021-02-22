@extends('layouts.plantillaL')

@section('contenido')
<h1>INADMITIDOS</h1>
<div class="table-responsive">
    <table class="table  table-bordered ">
        <thead>
            <tr>
                <th>Exp</th>
                <th>Inad</th>
                <th>Compañia</th>
                <th>F Sal</th>
                <th>H Sal</th>
                <th>V Salida</th>
                <th>compSeg</th>
                <th>Menor</th>
                <th>Pert</th>
                <th>Sala</th>
            </tr>
        </thead>
        <tbody id="LLegadas">
            <tr>
                @forelse ($inad as $item)
                <tr>

                    <td>{{$item['numExp']}}</td>
                    <td>{{$item['nombreInad']}}</td>
                    <td>{{$item['airline']}}</td>
                    <td>{{$item['feSalida']}}</td>
                    <td>{{$item['hSalida']}}</td>
                    <td>{{$item['vSalida']}}</td>
                    <td>{{$item['security']}}</td>
                    <td>{{$item['menor']}}</td>
                    <td>{{$item['pertenencias']}}</td>
                    <td>{{$item['sala']}}</td>
                </tr>

                @empty
                    <li>nada</li>
                @endforelse
            </tr>
        </tbody>
    </table>

</div>
@endsection
