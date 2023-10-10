@extends('layouts.plantilla')
@section('title', 'Crear equip')
@section('content')
<style>
   
</style>

<div class="bg-gray-100 min-h-screen">
    <div class="py-8 px-4">
        <h1 class="title">Crea o elimina un equip</h1>
        <form method="POST" action="{{ route('teams.store') }}" enctype="multipart/form-data" class="mb-8">
            @csrf
            <div class="mb-4">
                <label for="nom" class="text-green-700 font-bold block mb-2">Nom del equip:</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="clubs_esportius_id" class="text-green-700 font-bold block mb-2">Club Esportiu:</label>
                <select name="clubs_esportius_id" id="clubs_esportius_id" class="form-control" required>
                    <option value="" disabled selected>Selecciona un club esportiu</option>
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}">{{ $club->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="logo" class="text-green-700 font-bold block mb-2">Logo del equip (imatge):</label>
                <input type="file" name="logo" id="logo" class="form-control-file" accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-primary">Crear Equip</button>
        </form>

        <form method="POST" action="{{ route('teams.destroy') }}" class="mb-8">
            @csrf
            @method('DELETE')

            <div class="mb-4">
                <label for="selectTeam" class="text-green-700 font-bold block mb-2">Selecciona un equip a eliminar:</label>
                <select name="selectedTeamId" id="selectTeam" class="form-control">
                    @foreach ($equips as $equip)
                        <option value="{{ $equip->id }}">{{ $equip->nom }}</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-danger">Eliminar Equip</button>
        </form>
    <div class="mt-8 text-right"> 
        <a href="{{ route('teams.list') }}" class="btn btn-primary">Tornar a la llista d'equips</a>
    </div>
</div>

@endsection
