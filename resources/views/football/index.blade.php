@extends('layouts.plantilla')
@section('title', 'Equips')
@section('content')
<h1>Equips actuals de la lliga</h1>

<div>
    <a href="{{ route('teams') }}" class="btn btn-primary">Gestionar equips</a>
</div>

<form method="GET" action="{{ route('index') }}">
    <div class="form-group">
        <label for="club_esportiu">Filtrar per Club:</label>
        <select name="club_esportiu" id="club_esportiu" class="form-control">
            <option value="" selected>Selecciona un club </option>
            @foreach ($clubs as $club)
                <option value="{{ $club->id }}">{{ $club->nom }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Filtrar</button>
</form>

<ul>
    @foreach($equips as $equip)
    <li>
        <a href="{{ route('showTeam', ['id' => $equip->id]) }}">
            {{ $equip->nom }}
        </a>
    </li>
    @endforeach
</ul>
