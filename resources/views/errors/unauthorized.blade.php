@extends('layouts.plantilla')
@section('content')

<div id="popup-overlay" class="popup-overlay">
    <div id="popup-content" class="popup-content">
        <p>No tens permisos per realitzar aquesta acció.</p>
        <button id="cerrar-popup">Volver</button>
    </div>
</div>

<style>
    .popup-overlay {
        display: none;
        position: fixed;
        top: 50%;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.7);
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .popup-content {
        background-color: #c97a7a;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
    }
</style>
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

 
@endsection
