@extends('layouts.plantilla')
@section('title', 'Gestionar Jugadors')
@section('content')

<div class="container-lg">
    <h1 class= "title">Gestiona l'equip {{ $equip->nom }}</h1>
    <br>
    <h2 class= "subtitle">Jugadors</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Edat</th>
                <th>Número</th>
                <th>Posició</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jugadors as $jugador)
                <tr>
                    <form method="POST" action="{{ route('players.update', ['id' => $jugador->id]) }}">
                    <td class="py-1">
                        <input type="text" name="nom" value="{{ $jugador->nom }}" class="form-control">
                    </td>
                    <td class="py-1">
                        <input type="number" name="edat" value="{{ $jugador->edat }}" class="form-control w-10">
                    </td>
                    <td>
                        <input type="number" name="num" value="{{ $jugador->num }}" class="form-control w-10">
                    </td>
                    <td>
                        <input type="text" name="posicio" value="{{ $jugador->posicio }}" class="form-control">
                    </td>
                    <td>                      
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">Actualitzar</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('players.destroy', ['id' => $jugador->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h2 class = "subtitle">Entrenadors</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entrenadors as $entrenador)
            <tr>
                <td>{{ $entrenador->nom }}</td>
                <td>
                    <form method="POST" action="{{ route('trainers.destroy', ['id' => $entrenador->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <h2 class = "subtitle">Accions</h2>
    <h2>Afegeix un jugador nou</h2>
    <form method="POST" action="{{ route('players.store',['id' => $equip->id])}}">
        @csrf
        <input type="text" name="nom" placeholder="Nom">
        <input type="number" name="edat" placeholder="Edat">
        <input type="number" name="num" placeholder="Número">
        <input type="text" name="posicio" placeholder="Posició">
        <button type="submit" class ="btn btn-primary">Afegir</button>
    </form>

    <h2>Afegeix un Entrenador</h2>
    <form method="POST" action="{{ route('trainers.store',['id' => $equip->id])}}">
        @csrf
        <input type="text" name="nom" placeholder="Nom">
        <button type="submit"class= "btn btn-primary">Afegir</button>
    </form>
    <div class="mt-8 text-right">
        <a href="{{ route('teams.show', ['id' => $equip->id]) }}" class="btn btn-primary">Tornar a la gestió d'equips</a>
    </div>
</div>
@endsection
