@extends('layouts.app')

@section('titulo', 'Alquiler de autos en La Ceiba')

@section('estilos')
<style>
    .pilar { border-top: 4px solid var(--bulma-primary); padding-top: 1rem; }
    .ruta { border-top: 4px solid var(--bulma-primary); height: 100%; }
    .precio { font-size: 1.5rem; font-weight: 700; }
</style>
@endsection

@section('contenido')

<section class="hero is-black is-medium">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Alquiler de autos en La Ceiba</h1>
            <p class="subtitle is-4" style="max-width: 38rem;">Somos una empresa ceibeña. Autos revisados y listos para la ciudad, la montaña y toda la costa de Atlántida.</p>
            <div class="buttons mt-5">
                <a class="button is-light is-medium" href="#flota">Ver la flota</a>
                <a class="button is-light is-outlined is-medium" href="#rutas">Rutas del litoral</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column pilar">
                <h2 class="title is-5">Reservas sin presión</h2>
                <p>Pregunte, compare y decida con calma. Si sus fechas cambian, lo conversamos por teléfono.</p>
            </div>
            <div class="column pilar">
                <h2 class="title is-5">Autos para trabajar y viajar</h2>
                <p>Sedanes, camionetas y pickups revisados antes de cada entrega. Sin lujos innecesarios.</p>
            </div>
            <div class="column pilar">
                <h2 class="title is-5">Atención de aquí</h2>
                <p>Conocemos las carreteras del litoral y le decimos qué vehículo conviene según el camino.</p>
            </div>
        </div>
    </div>
</section>

<section class="section pt-0" id="flota">
    <div class="container">
        <h2 class="title is-3">Parte de nuestra flota</h2>
        <p class="subtitle is-6 has-text-grey">Precios por día, en lempiras.</p>

        <div class="columns is-multiline">
            @foreach ($featured as $v)
                <div class="column is-6-tablet is-3-desktop">
                    @include('partials.vehicle-card', ['v' => $v])
                </div>
            @endforeach
        </div>

        <div class="buttons">
            @foreach ($categories as $c)
                <a class="button is-light" href="/vehiculos#categoria-{{ $c->id }}">{{ $c->nombre }}</a>
            @endforeach
        </div>
    </div>
</section>

<section class="hero is-black is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="has-background-primary mb-4" style="width: 4rem; height: 4px;"></div>
            <p class="title is-2" style="max-width: 42rem;">Un buen servicio se nota antes de arrancar el motor.</p>
        </div>
    </div>
</section>

<section class="section" id="rutas">
    <div class="container">
        <h2 class="title is-3">Rutas del litoral atlántico</h2>
        <p class="subtitle is-6 has-text-grey">Lugares de Atlántida para recorrer en auto. Los tiempos son aproximados y salen desde La Ceiba; confirme el estado de la vía antes de salir.</p>

        <div class="columns is-multiline">
            @foreach ($places as $p)
                <div class="column is-6-tablet is-3-desktop">
                    <div class="card ruta">
                        <div class="card-content">
                            <p class="has-text-primary has-text-weight-bold is-size-7">{{ $p->ciudad }}</p>
                            <h3 class="title is-5 mb-2">{{ $p->nombre }}</h3>
                            <p>{{ $p->descripcion }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section has-background-light">
    <div class="container">
        <p class="has-text-grey">¿Le quedó alguna duda? Cuando lo desee, puede <a href="/contacto"><strong>escribirnos aquí</strong></a>. Sin apuro.</p>
    </div>
</section>

@endsection
