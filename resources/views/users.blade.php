@extends('layouts.plantilla')
@section('title', 'Users')
@section('content')
    <h1>Lista d'usuaris</h1>
    <a href="{{ route('menu') }}" class="btn btn-primary">Tornar al menú principal</a>
  
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>M@il</th>
                    @auth
                    <th>Rols</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @auth
                            <form method="POST" action="{{ route('user.assign-roles', $user->id) }}">
                                @csrf
                                @foreach ($roles as $role)
                                    <label>
                                        <input type="checkbox" name="roles[]" value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                                        {{ $role->name }}
                                    </label>
                                @endforeach
                                <button type="submit">Guardar</button>
                            </form>
                            @endauth
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endsection