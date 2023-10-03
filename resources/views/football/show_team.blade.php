@extends('layouts.plantilla')
@section('title', 'Equip '. $equip->nom)
@section('content')

<h1> {{ $equip->nom }}</h1>
<h2>Club Esportiu: {{ $equip->clubsEsportiu->nom }}</h2>

<h2>Jugadorss:</h2>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Edat</th>
            <th>Número</th>
            <th>Posició</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equip->jugadors as $jugador)
        <tr>
            <td>{{ $jugador->id }}</td>
            <td>{{ $jugador->nom }}</td>
            <td>{{ $jugador->edat }}</td>
            <td>{{ $jugador->num }}</td>
            <td>{{ $jugador->posicio }}</td>
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
            <th>Data</th>
            <th>Estadi</th>
            <th>Local</th>
            <th>Visitant</th>
            <th>LLiga</th>
            <th>Temporada</th>
            <th>Resultat</th>
            <th>Temps</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($partits as $partit)
        <tr>
            <td>{{ $partit->data }}</td>
            <td>{{ $partit->estadi }}</td>
            <td>{{ $partit->equipLocal->nom }}</td>
            <td>{{ $partit->equipVisitant->nom }}</td>
            <td>{{ $partit->lliga->nom }}</td>
            <td>{{ $partit->lliga->temporada }}</td>
            <td>{{ $partit->resultat }}</td>
            <td>{{ $partit->temps }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('team', ['id' => $equip->id]) }}" class="btn btn-primary">Gestionar Equip</a>
<br>
<a href="{{ route('matches.edit', ['id' => $equip->id]) }}" class="btn btn-primary">Gestionar partits</a>
<br>
<a href="{{ route('index') }}" class="btn btn-primary">Tornar a la llista d'equips</a>


