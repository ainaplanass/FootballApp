@extends('layouts.plantilla')
@section('title', 'Equip '. $equip->nom)
@section('content')

<h1> {{ $equip->nom }}</h1>
<h2>Club Esportiu: {{ $equip->clubsEsportiu->nom }}</h2>

<h2>Jugadorss:</h2>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Edat</th>
            <th>Número</th>
            <th>Posició</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equip->jugadors as $jugador)
        <tr>
            <td>{{ $jugador->nom }}</td>
            <td>{{ $jugador->edat }}</td>
            <td>{{ $jugador->num }}</td>
            <td>{{ $jugador->posició }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

    <h2>Entrenador/s:</h2>
    <ul>
        @foreach ($equip->entrenador as $entrenador)
            <li>{{ $entrenador->nom }}</li>
        @endforeach
    </ul>

    <h2>Partits:</h2>
<table>
    <thead>
        <tr>
            <th>Resulta</th>
            <th>Fecha</th>
            <th>Estadio</th>
            <th>Local</th>
            <th>Visitante</th>
            <th>Liga</th>
            <th>Temporada</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($partits as $partit)
        <tr>
            <td>{{ $partit->resultat }}</td>
            <td>{{ $partit->data }}</td>
            <td>{{ $partit->estadi }}</td>
            <td>{{ $partit->equipLocal->nom }}</td>
            <td>{{ $partit->equipVisitant->nom }}</td>
            <td>{{ $partit->lliga->nom }}</td>
            <td>{{ $partit->lliga->temporada }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

