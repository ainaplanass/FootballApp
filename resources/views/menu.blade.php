@extends('layouts.plantilla')
@section('title', 'Menú')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="text-right mt-4 ml-4 absolute top-5 right-10">
        @auth
        <form action="{{ route('logout') }}" method="POST" class="inline-block">
            @csrf
            <button type="submit" class="btn btn-primary">Tancar la sessió</button>
        </form>
        @else
        <a href="{{ route('login') }}" class="btn btn-primary">Iniciar la sessió</a>
        @endauth
    </div>    
    <div class="text-right mt-4 ml-4 absolute top-20 right-10">  
        <a href="{{ route('register') }}"class="btn btn-primary">Crea un compte</a>
    </div>    
    <br><br><br>
    <div class="container mx-auto px-8 mt-12 text-black text-center">
        <div class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-4">
            Benvingut a l'aplicació de la Lliga de Fútbol Escolar de Barcelona Sants
        </div>
    </div>
    @auth
    <div class="m-auto md:w-8/12 lg:w-10/12 xl:w-6/12">
        <div class="p-6 sm:p-12">
            <a href="{{ route('teams.list') }}" class="btn btn-primary">
                Equips
            </a>
            <a href="{{ route('matches') }}" class="btn btn-primary">
                Partits
            </a>
            <a href="{{ route('users.list') }}" class="btn btn-primary">
                Usuaris
            </a>
        </div>
    </div>

    @endauth

    <div class="container mx-auto mt-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="article">
                <img src="{{ asset('images/jugadors2.jpg') }}" alt="Noticia 1">
                <div class="article-content">
                    <h3 class="article-title">L'equip de l'institut de Sants guanya per golejada a Mataró</h3>
                    <p class="article-excerpt">L'equip de l'Institut de Sants demostra així el seu talent i compromís amb l'esport, i es converteix en un clar candidat a la victòria en la seva lliga.</p>
                    <a href="#" class="article-link">Més informació &rarr;</a>
                </div>
            </div>

            <div class="article">
                <img src="{{ asset('images/pilota_camp.jpg') }}" alt="Noticia 2">
                <div class="article-content">
                    <h3 class="article-title">Equips que passen a la semifinal</h3>
                    <p class="article-excerpt">Les semifinals prometen emocions i competició de primer nivell mentre aquests dos equips intenten arribar a la final i guanyar el títol.</p>
                    <a href="#" class="article-link">Més informació &rarr;</a>
                </div>
            </div>

            <div class="article">
                <img src="{{ asset('images/jugadors.jpg') }}" alt="Noticia 3">
                <div class="article-content">
                    <h3 class="article-title">Sabadell fora de joc</h3>
                    <p class="article-excerpt">En una sorprenent gira internacional, l'equip de l'Institut de Montserrat va conquerir una victòria contundent contra un equip rival de Sabadell, destacant el seu talent més enllà de les fronteres.</p>
                    <a href="#" class="article-link">Més informació &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
