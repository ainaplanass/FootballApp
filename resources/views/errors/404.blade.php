@extends('layouts.plantilla')
@section('title','Not Found')

<div id="popup-overlay" class="popup-overlay">
    <div id="popup-content" class="popup-content">
        <p class = "subtitle">Aquesta pàgina no existeix</p>
        <button id="cerrar-popup" class= "btn btn-primary">Tornar</button>
    </div>
</div>
<script>
 document.addEventListener('DOMContentLoaded', function () {
    const popupOverlay = document.getElementById('popup-overlay');
    const cerrarPopup = document.getElementById('cerrar-popup');

    const urlMenu = "{{route('menu')}}";

    popupOverlay.style.display = 'block';

    cerrarPopup.addEventListener('click', function () {
        popupOverlay.style.display = 'none';

        const urlMenuGuardada = localStorage.getItem('urlMenu');
        if (urlMenuGuardada) {
            window.location.href = urlMenuGuardada;
        } else {
            window.location.href = urlMenu; 
        }
    });
});

</script>
