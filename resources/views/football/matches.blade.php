@extends('layouts.plantilla')
@section('title', 'Gestionar Partits')
@section('content')
@php
    $useLongContainer = true;
@endphp

<div class="container-lg  mx-auto p-4">
    <h1 class="title">Aquí pots gestionar els partits de {{ $equip->nom }}</h1>    
    <h2 class="subtitle">Partits Actuals</h2>
    <table class="table">
        <thead>
            <tr>
                <th class="no-wrap">Data</th>
                <th>Estadi</th>
                <th>Equip Local</th>
                <th>Equip Visitant</th>
                <th>Temps</th>
                <th>Resultat</th>
                <th>Lliga</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partits as $partit)
            <tr>
                <form method="POST" action="{{ route('matches.update', ['id' => $partit->id]) }}">
                    @csrf
                    @method('PUT')
                    <td>
                        <div class="form-group">
                            <input type="date" name="data" class="form-control" value="{{ $partit->data }}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="estadi" class="form-control w-20" value="{{ $partit->estadi }}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="equipLocal_id"></label>
                            <select name="equipLocal_id" id="equipLocal_id" class="form-control w-25" required>
                                @foreach ($equipsDispo as $equip)
                                    <option value="{{ $equip->id }}" {{ $equip->id == $partit->equipLocal->id ? 'selected' : '' }}>{{ $equip->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="equipVisitant_id"></label>
                            <select name="equipVisitant_id" id="equipVisitant_id" class="form-control w-25" required>
                                @foreach ($equipsDispo as $equip)
                                    <option value="{{ $equip->id }}" {{ $equip->id == $partit->equipVisitant->id ? 'selected' : '' }}>{{ $equip->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="time" name="temps" class="form-control" value="{{ $partit->temps }}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="resultat" class="form-control w-10" value="{{ $partit->resultat }}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="lliga_id"></label>
                            <select name="lliga_id" id="lliga_id" class="form-control" required>
                                @foreach ($lliguesDispo as $lliga)
                                    <option value="{{ $lliga->id }}" {{ $lliga->id == $partit->lliga->id ? 'selected' : '' }}>{{ $lliga->nom }}</option>
                                @endforeach
                            </select>
                        </div>    
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Actualitzar</button>
                    </td>
                </form>
                <td>
                    <form method="POST" action="{{ route('matches.destroy', ['id' => $partit->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <h2 class="subtitle">Crear Partit Nou</h2>
    <div>
        <form action="{{ route('matches.store',['id' => $equip->id])}}" method="POST">
            @csrf
            <div class="form-group mt-4">
                <label for="resultat">Resultat:</label>
                <input type="text" name="resultat" id="resultat" class="form-control">
            </div>
            <div class="form-group mt-4">
                <label for="data">Dia:</label>
                <input type="date" name="data" id="data" class="form-control" required>
            </div>           
            <div class="form-group mt-4">
                <label for="data">Temps:</label>
                <input type="time" name="temps" id="temps" class="form-control" >
            </div>
            <div class="form-group mt-4">
                <label for="estadi">Estadi:</label>
                <input type="text" name="estadi" id="estadi" class="form-control" required>
            </div>
            <div class="form-group mt-4">
                <label for="equipVisitant_id">Equip Visitant:</label>
                <select name="equipVisitant_id" id="equipVisitant_id" class="form-control" required>
                    @foreach ($equipsDispo as $equip)
                        <option value="{{ $equip->id }}">{{ $equip->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-4">
                <label for="lliga_id">Lliga:</label>
                <select name="lliga_id" id="lliga_id" class="form-control" required>
                    @foreach ($lliguesDispo as $lliga)
                        <option value="{{ $lliga->id }}">{{ $lliga->nom }}</option>
                    @endforeach
                </select>
            </div>        
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Crear Partit</button>
            </div>
        </form>
    </div>

    <div class="mt-8 text-right">
        <a href="{{ route('teams.show', ['id' => $equip->id]) }}" class="btn btn-primary">Tornar a la gestió d'equips</a>
    </div>
</div>

@endsection
