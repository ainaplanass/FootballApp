@extends('layouts.plantilla')

@section('title', 'Equips')

@section('content')

<div class="bg-gray-100 min-h-screen">
    <div class="py-8 px-4">
        <h1 class="title">Equips actuals de la lliga</h1>
        <form method="GET" action="{{ route('teams.list') }}">
            <div class="flex items-center space-x-4 mt-4">
                <label for="club_esportiu" class="text-green font-bold">Filtrar per Club:</label>
                <select name="club_esportiu" id="club_esportiu" class="bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-green-500">
                    <option value="" selected>Selecciona un club</option>
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}">{{ $club->nom }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </form>

        <ul class="mt-6 space-y-6">
            @foreach($equips as $equip)
            <li>
                <a href="{{ route('teams.show', ['id' => $equip->id]) }}" class="block bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $equip->nom }}</h2>
                        <img src="{{ asset($equip->logo_path) }}" alt="{{ $equip->nom }}" class="w-12 h-12 object-cover rounded-full">
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
        @auth
        <div class="mt-8 text-left">
            <a href="{{ route('teams') }}" class="btn btn-primary">Gestionar Equips</a>
        </div>
        @endauth
        <div class="mt-8 text-right"> 
            <a href="{{ route('menu') }}" class="btn btn-primary">Tornar al menú</a>
        </div>
    </div>
</div>

@endsection
