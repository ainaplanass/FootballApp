@extends('layouts.plantilla')
@section('title', 'home')
@section('content')
<div class="bg-blue-500 text-white p-4">
    Benvingut a l'aplicació de la Lliga de Fútbol Escolar de Barcelona Sants<br>
    @auth
    <a href="{{ route('index') }}">Equips</a><br>
    <a href="{{ route('matches') }}">Partits</a><br>
    <a href="{{ route('users.list') }}">Usuaris</a><br>
    @endauth
    <a href="{{ route('login') }}">Inicia sessió</a>
    
</div>
@endsection
