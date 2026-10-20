@extends('layouts.app')

@section('titulo', 'Servicios')

@section('estilos')
<style>
    .servicio { border-top: 4px solid var(--bulma-primary); }
</style>
@endsection

@section('contenido')

<section class="hero is-black is-small">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-2">Servicios</h1>
            <p class="subtitle is-5" style="max-width: 38rem;">Alquile por el tiempo que necesite y elija dónde recibir el vehículo.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="title is-3">Por cuánto tiempo</h2>
        <div class="columns">
            <div class="column">
                <div class="box servicio">
                    <h3 class="title is-4">Por día</h3>
                    <p>Para trámites, reuniones o un recorrido puntual por la ciudad.</p>
                </div>
            </div>
            <div class="column">
                <div class="box servicio">
                    <h3 class="title is-4">Fin de semana</h3>
                    <p>Para una escapada a Tela, Sambo Creek o el río Cangrejal.</p>
                </div>
            </div>
            <div class="column">
                <div class="box servicio">
                    <h3 class="title is-4">Por semana</h3>
                    <p>Para viajes largos, trabajo en la zona o visitas familiares.</p>
                </div>
            </div>
        </div>
        <p class="has-text-grey">La tarifa depende del vehículo. El precio por día aparece en cada tarjeta de la página de <a href="/vehiculos">Vehículos</a>.</p>
    </div>
</section>

<section class="section has-background-light">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-6">
                <figure class="image is-3by2">
                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=900&q=80" alt="Entrega de llaves">
                </figure>
            </div>
            <div class="column is-6">
                <h2 class="title is-3">Entrega y recogida</h2>
                <div class="content">
                    <ul>
                        <li>Recoja el vehículo en nuestra oficina del Barrio El Centro.</li>
                        <li>Si lo prefiere, consulte por entrega o devolución en otra dirección de La Ceiba.</li>
                        <li>Cualquier costo adicional se le informa antes de confirmar.</li>
                    </ul>
                </div>
                <p class="has-text-grey">Las opciones de entrega y recogida están sujetas a las condiciones del negocio.</p>
            </div>
        </div>
    </div>
</section>

<section class="hero is-black is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="has-background-primary mb-4" style="width: 4rem; height: 4px;"></div>
            <p class="title is-2" style="max-width: 42rem;">Si el plan cambia, hablemos. Preferimos resolverlo con usted antes que esconderlo en una cláusula.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <p class="has-text-grey">¿Quiere saber qué opción le conviene? <a href="/contacto"><strong>Consúltenos</strong></a> cuando guste.</p>
    </div>
</section>

@endsection
