
@extends('layouts.plantilla')
@section('title', 'Gestionar Partits')
@section('content')
<h1>Aquí pots gestionar els partits de {{ $equip->nom }}</h1>    
<h2>Partits Actuals</h2>
<table>
    <thead>
        <tr>
            <th>Resultat</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Estadi</th>
            <th>Equip Visitant</th>
            <th>Lliga</th>
            <th>Accions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($partits as $partit)
            <tr>
                <td>
                    <div class="field-container">
                        <span class="display-mode">{{ $partit->resultat }}</span>
                        <input type="text" name="resultat" value="{{ $partit->resultat }}" class="edit-mode form-control">
                    </div>
                </td>
                <td>
                    <div class="field-container">
                        <span class="display-mode">{{ $partit->data }}</span>
                        <input type="date" name="data" value="{{ $partit->data }}" class="edit-mode form-control">
                    </div>
                </td>
                <td>
                    <div class="field-container">
                        <span class="display-mode">{{ $partit->temps }}</span>
                        <input type="time" name="temps" value="{{ $partit->temps }}" class="edit-mode form-control">
                    </div>
                </td>
                <td>
                    <div class="field-container">
                        <span class="display-mode">{{ $partit->estadi }}</span>
                        <input type="text" name="estadi" value="{{ $partit->estadi }}" class="edit-mode form-control">
                    </div>
                </td>
                <td>{{ $partit->equipVisitant->nom }}</td>
                <td>{{ $partit->lliga->nom }}</td>
                <td>
                    <form method="POST" action="{{ route('matches.update', ['id' =>$partit->id]) }}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Actualitzar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<h2>Crear Partit Nou</h2>
<div class="container">
    <form action="{{ route('matches.store',['id' => $equip->id])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="resultat">Resultat:</label>
            <input type="text" name="resultat" id="resultat" class="form-control">
        </div>
        <div class="form-group">
            <label for="data">Temps:</label>
            <input type="time" name="temps" id="temps" class="form-control" >
        </div>
        <div class="form-group">
            <label for="data">Fecha:</label>
            <input type="date" name="data" id="data" class="form-control" required>
        </div>           
        <div class="form-group">
            <label for="temps">Hora:</label>
            <input type="time" name="temps" id="temps" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estadi">Estadi:</label>
            <input type="text" name="estadi" id="estadi" class="form-control" required>
        <div class="form-group">
            <label for="equipVisitant_id">Equip Visitant:</label>
            <select name="equipVisitant_id" id="equipVisitant_id" class="form-control" required>
                @foreach ($equipsDispo as $equip)
                    <option value="{{ $equip->id }}">{{ $equip->nom }}</option>
                    @endforeach
            </select>
            </div>
        <div class="form-group">
            <label for="lliga_id">Lliga:</label>
            <select name="lliga_id" id="lliga_id" class="form-control" required>
                @foreach ($lliguesDispo as $lliga)
                    <option value="{{ $lliga->id }}">{{ $lliga->nom }}</option>
                @endforeach
            </select>
        </div>      
        @auth     
        <button type="submit" class="btn btn-primary">Crear Partit</button>
        @endauth
    </form>
</div>
<a href="{{ route('teams.show', ['id' => $equip->id]) }}" class="btn btn-primary">Tornar a la gestió d'equip</a>
