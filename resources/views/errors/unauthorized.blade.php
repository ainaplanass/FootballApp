@extends('layouts.plantilla')
@section('title','Unauthorized')

<div id="popup-overlay" class="popup-overlay">
    <div id="popup-content" class="popup-content">
        <p class = "subtitle">No tens permisos per realitzar aquesta acció.</p>
        <button id="cerrar-popup" class= "btn btn-primary">Tornar</button>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const popupOverlay = document.getElementById('popup-overlay');
        const cerrarPopup = document.getElementById('cerrar-popup');

        const urlAnterior = document.referrer;
        localStorage.setItem('urlAnterior', urlAnterior);

        popupOverlay.style.display = 'block';

        cerrarPopup.addEventListener('click', function () {
            popupOverlay.style.display = 'none';

            const urlAnterior = localStorage.getItem('urlAnterior');
            if (urlAnterior) {
                window.location.href = urlAnterior;
            }
        });
    });
</script>
