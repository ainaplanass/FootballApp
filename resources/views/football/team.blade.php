@extends('layouts.plantilla')
@section('title', 'Crear equip')
@section('content')
<h1> Crea un equip </h1>
<form method="POST" action="{{ route('teams.store') }}">
    @csrf

    <div class="form-group">
        <label for="nom">Nom del equip</label>
        <input type="text" name="nom" id="nom" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="clubs_esportius_id">Club Esportiu:</label>
        <select name="clubs_esportius_id" id="clubs_esportius_id" class="form-control" required>
            <option value="" disabled selected>Selecciona un club esportiu</option>
            @foreach ($clubs as $club)
                <option value="{{ $club->id }}">{{ $club->nom }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Crear Equip</button>
</form>

    <form method="POST" action="{{ route('teams.destroy') }}">
        @csrf
        @method('DELETE')
    
        <div class="form-group">
            <label for="selectTeam">Selecciona un equip a eliminar:</label>
            <select name="selectedTeamId" id="selectTeam" class="form-control">
                @foreach ($equips as $equip)
                    <option value="{{ $equip->id }}">{{ $equip->nom }}</option>
                @endforeach
            </select>
        </div>
    
        <button type="submit" class="btn btn-danger">Eliminar Equip</button>
    </form>
<a href="{{ route('index') }}" class="btn btn-primary">Tornar a la llista d'equips</a>

