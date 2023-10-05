@extends('layouts.plantilla')
@section('title', 'home')
@section('content')

<link href="{{ asset('public/css') }}" rel="stylesheet">

<div class="menu">
    <h2>Bienvenido a la aplicación de la Lliga de Fútbol Escolar de Barcelona Sants</h2>

    <ul>
        @auth
        <li><a href="{{ route('teams.list') }}">Ver Equipos</a></li>
        <li><a href="{{ route('matches') }}">Ver Partidos</a></li>
        <li><a href="{{ route('users.list') }}">Ver Usuarios</a></li>
        <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
        @endauth
    </ul>
</div>

@endsection
