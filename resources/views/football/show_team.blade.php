@extends('layouts.plantilla')
@section('title', 'Equip '. $equip->nom)
@section('content')

<div class="container-lg">
    <h1 class="title">{{ $equip->nom }}</h1>
    <h2 class = "subtitle">Club Esportiu: {{ $equip->clubsEsportiu->nom }}</h2>   
    <h2 class = "subsubtitle">Jugadors:</h2>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nom</th>
                <th class="px-4 py-2">Edat</th>
                <th class="px-4 py-2">Número</th>
                <th class="px-4 py-2">Posició</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equip->jugadors as $jugador)
            <tr>
                <td class="px-4 py-2">{{ $jugador->id }}</td>
                <td class="px-4 py-2">{{ $jugador->nom }}</td>
                <td class="px-4 py-2">{{ $jugador->edat }}</td>
                <td class="px-4 py-2">{{ $jugador->num }}</td>
                <td class="px-4 py-2">{{ $jugador->posicio }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class = "subsubtitle">Entrenador/s:</h2>
    <ul>
        @foreach ($equip->entrenador as $entrenador)
            <li>{{ $entrenador->nom }}</li>
        @endforeach
    </ul>
<br>
    <h2 class = "subsubtitle">Partits:</h2>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Data</th>
                <th class="px-4 py-2">Estadi</th>
                <th class="px-4 py-2">Local</th>
                <th class="px-4 py-2">Visitant</th>
                <th class="px-4 py-2">Lliga</th>
                <th class="px-4 py-2">Temporada</th>
                <th class="px-4 py-2">Resultat</th>
                <th class="px-4 py-2">Temps</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partits as $partit)
            <tr>
                <td class="px-4 py-2">{{ $partit->data }}</td>
                <td class="px-4 py-2">{{ $partit->estadi }}</td>
                <td class="px-4 py-2">{{ $partit->equipLocal->nom }}</td>
                <td class="px-4 py-2">{{ $partit->equipVisitant->nom }}</td>
                <td class="px-4 py-2">{{ $partit->lliga->nom }}</td>
                <td class="px-4 py-2">{{ $partit->lliga->temporada }}</td>
                <td class="px-4 py-2">{{ $partit->resultat }}</td>
                <td class="px-4 py-2">{{ $partit->temps }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <div class="mt-8 text-left">
        <a href="{{ route('team', ['id' => $equip->id]) }}" class="btn btn-primary">Gestionar Equip</a>
    </div>
    <div class="mt-8 text-left">
        <a href="{{ route('matches.show', ['id' => $equip->id]) }}" class="btn btn-primary">Gestionar Partits</a>
    </div>
 
    <div class="mt-8 text-right">
        <a href="{{ route('teams.list') }}" class="btn btn-primary">Tornar a la llista d'equips</a>
    </div>
</div>
@endsection
