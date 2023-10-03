@extends('layouts.plantilla')
@section('title', 'Partits Actuals')
@section('content')
    <h1>Partits actuals de la lliga</h1>
    <table>
        <thead>
            <tr>
                <th>Resultat</th>
                <th>Data</th>
                <th>Temps</th>
                <th>Estadi</th>
                <th>Equip Local</th>
                <th>Equip Visitant</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partits as $partit)
                <tr>
                    <td>{{ $partit->resultat }}</td>
                    <td>{{ $partit->data }}</td>
                    <td>{{ $partit->temps }}</td>
                    <td>{{ $partit->estadi }}</td>
                    <td>{{ $partit->equipLocal->nom }}</td>
                    <td>{{ $partit->equipVisitant->nom }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
<a href="{{ route('home') }}" class="btn btn-primary">Tornar al menú principal</a>

@endsection
