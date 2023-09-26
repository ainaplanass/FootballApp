@extends('layouts.plantilla')
@section('title', 'Equips')
@section('content')
<h1>Equips actuals de la lliga</h1>
<ul>
    @foreach($equips as $equip)
    <li>
        <a href="{{ route('show', ['equip' => $equip->nom]) }}">
            {{ $equip->nom }}
        </a>
    </li>
    @endforeach
</ul>
@endsection
