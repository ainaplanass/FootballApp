@extends('layouts.plantilla')
@section('title', 'Partits Actuals')
@section('content')

<div class="container mx-auto p-4">
    <h1 class = "title">Partits actuals de la lliga</h1>
    <table>
        <thead>
            <tr>
                <th>Data</th>
                <th>Estadi</th>
                <th>Equip Local</th>
                <th>Equip Visitant</th>
                <th>Resultat</th>
                <th>Temps</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partits as $partit)
                <tr>
                    <td>{{ $partit->data }}</td>
                    <td>{{ $partit->estadi }}</td>
                    <td>{{ $partit->equipLocal->nom }}</td>
                    <td>{{ $partit->equipVisitant->nom }}</td>
                    <td>{{ $partit->resultat }}</td>
                    <td>{{ $partit->temps }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-8 text-right">
        <a href="{{ route('menu') }}" class="btn btn-primary">Tornar al menú principal</a>
    </div>
</div>
@endsection
