@extends('layouts.app')

@section('titulo', 'Nosotros')

@section('estilos')
<style>
    .valor { border-left: 4px solid var(--bulma-primary); margin: 0 0.75rem; }
</style>
@endsection

@section('contenido')

<section class="hero is-black is-small">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-2">Una empresa de La Ceiba</h1>
            <p class="subtitle is-5" style="max-width: 38rem;">Alquilamos vehículos a quienes viven aquí y a quienes nos visitan, con las mismas reglas para todos.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column valor">
                <h2 class="title is-4">Seguridad</h2>
                <p>Cada vehículo se revisa antes de salir. Los documentos y las condiciones quedan claros desde el primer día.</p>
            </div>
            <div class="column valor">
                <h2 class="title is-4">Comodidad</h2>
                <p>Vehículos limpios, entrega puntual y un proceso sencillo para que usted solo piense en el camino.</p>
            </div>
            <div class="column valor">
                <h2 class="title is-4">Atención al cliente</h2>
                <p>Cuando llama, le contesta una persona que conoce la ciudad y las carreteras de la costa.</p>
            </div>
        </div>
    </div>
</section>

<section class="section pt-0">
    <div class="container">
        <figure class="image is-16by9">
            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1280&q=80" alt="La Ceiba, Atlántida">
        </figure>
    </div>
</section>

<section class="hero is-black is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="has-background-primary mb-4" style="width: 4rem; height: 4px;"></div>
            <p class="title is-2" style="max-width: 42rem;">La confianza se construye con cosas pequeñas: puntualidad, claridad y un auto en buen estado.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <p class="has-text-grey">¿Quiere conocernos mejor? Visítenos en el Barrio El Centro o <a href="/contacto"><strong>escríbanos</strong></a>.</p>
    </div>
</section>

@endsection
