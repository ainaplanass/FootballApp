@extends('layouts.plantilla')
@section('title', 'Gestionar Jugadors')
@section('content')
    <h1>Gestiona l'equip {{ $equip->nom }}</h1>

    <br>

    <h2>Jugadors</h2>
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
                    <td>
                        <input type="text" name="nom" value="{{ $jugador->nom }}" class="form-control">
                    </td>
                    <td>
                        <input type="number" name="edat" value="{{ $jugador->edat }}" class="form-control">
                    </td>
                    <td>
                        <input type="number" name="num" value="{{ $jugador->num }}" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="posicio" value="{{ $jugador->posicio }}" class="form-control">
                    </td>
                    <td>
                        <form method="POST" action="{{ route('players.update', ['jugador' => $jugador]) }}">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">Actualitzar</button>
                        </form>
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
    <h2>Entrenadors</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entrenadors as $entrenador)
                <tr>
                    <td>
                        <input type="text" name="nom" value="{{ $entrenador->nom }}" class="form-control">
                    </td>
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
    
    <h2>Afegeix un jugador nou</h2>
    <form method="POST" action="{{ route('players.store',['id' => $equip->id])}}">
        @csrf
        <input type="text" name="nom" placeholder="Nom">
        <input type="number" name="edat" placeholder="Edat">
        <input type="number" name="num" placeholder="Número">
        <input type="text" name="posicio" placeholder="Posició">
        <button type="submit">Afegir</button>
    </form>

    <h2>Afegeix un Entrenador</h2>
    <form method="POST" action="{{ route('trainers.store',['id' => $equip->id])}}">
        @csrf
        <input type="text" name="nom" placeholder="Nom">
        <button type="submit">Afegir</button>
    </form>

    <a href="{{ route('teams.show', ['id' => $equip->id]) }}" class="btn btn-primary">Tornar a la gestió d'equip</a>

@endsection
