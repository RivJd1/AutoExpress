@extends('layouts.app')

@section('titulo', 'Requisitos')

@section('estilos')
<style>
    details { border-bottom: 1px solid #ddd; padding: 1rem 0; max-width: 46rem; }
    summary { cursor: pointer; font-weight: 700; }
    details p { margin-top: 0.5rem; }
</style>
@endsection

@section('contenido')

<section class="hero is-black is-small">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-2">Requisitos</h1>
            <p class="subtitle is-5" style="max-width: 38rem;">Lo que necesita tener a mano para alquilar, explicado sin letra pequeña.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                <h2 class="title is-3">Documentos</h2>
                <div class="content">
                    <ul>
                        <li><strong>Licencia de conducir vigente.</strong> A nombre de quien manejará el vehículo.</li>
                        <li><strong>Identificación vigente.</strong> Documento de identidad o pasaporte.</li>
                        <li><strong>Mayoría de edad.</strong> Edad mínima para contratar el servicio.</li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <h2 class="title is-3">Condiciones de contratación</h2>
                <div class="content">
                    <ul>
                        <li><strong>Garantía.</strong> Se acuerda antes de entregar el vehículo.</li>
                        <li><strong>Combustible.</strong> Se devuelve con el nivel convenido en el contrato.</li>
                        <li><strong>Uso.</strong> Solo conductores registrados en el contrato.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section has-background-light">
    <div class="container">
        <h2 class="title is-3">Preguntas frecuentes</h2>

        <details>
            <summary>¿Puedo alquilar con licencia de otro país?</summary>
            <p>Consúltenos antes de venir. Revisamos cada caso y le confirmamos qué documentos necesita.</p>
        </details>
        <details>
            <summary>¿Puedo cambiar las fechas de mi alquiler?</summary>
            <p>Sí, avísenos con tiempo y buscamos una opción que funcione para ambos.</p>
        </details>
        <details>
            <summary>¿Puedo llevar el vehículo a otros departamentos?</summary>
            <p>Depende del contrato y del vehículo. Díganos su ruta y le respondemos.</p>
        </details>

        <p class="mt-5 has-text-grey">¿Otra duda? <a href="/contacto"><strong>Escríbanos</strong></a>.</p>
    </div>
</section>

@endsection
