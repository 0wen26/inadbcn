@extends('layouts.plantillaL')

@section('contenido')
<h1>INADMITIDOS ICTS</h1>
<div class="table-responsive">
    <table class="table  table-bordered ">
        <thead>
            <tr>
                <th>N Asist</th>
                <th>Comp Aerea</th>
                <th>N Exp</th>
                <th>F Entrada</th>
                <th>H Entrada</th>
                <th>V Salida</th>
                <th>F Salida</th>
                <th>Hora Salida</th>
                <th>H Real Salida</th>
                <th>Nom Pasajero</th>
            </tr>
        </thead>
        <tbody id="LLegadas">
            <tr>
                @forelse ($inadIcts as $item)
                <tr>
                    <td>{{$item['cust']}}</td>
                    <td>{{$item['airline']}}</td>
                    <td>{{$item['numExp']}}</td>
                    <td>{{$item['fEntrada']}}</td>
                    <td>{{$item['hEntrad']}}</td>
                    <td>{{$item['vSalida']}}</td>
                    <td>{{$item['feSalida']}}</td>
                    <td>{{$item['hSalida']}}</td>
                    <td>{{$item['HRSal']}}</td>
                    <td>{{$item['nombreInad']}}</td>
                </tr>

                @empty
                    <li>nada</li>
                @endforelse
            </tr>
        </tbody>
    </table>

</div>
@endsection
