@extends('layouts.app')

@section('titulo', 'Vehículos en alquiler')

@section('estilos')
<style>
    .precio { font-size: 1.5rem; font-weight: 700; }
</style>
@endsection

@section('contenido')

<section class="hero is-black is-small">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-2">Vehículos en alquiler</h1>
            <p class="subtitle is-5" style="max-width: 38rem;">Precio por día en lempiras. Imágenes ilustrativas.</p>
        </div>
    </div>
</section>

<nav class="has-background-white" style="border-bottom: 1px solid #ddd;">
    <div class="container">
        <div class="tabs mb-0">
            <ul>
                @foreach ($categories as $c)
                    <li><a href="#categoria-{{ $c->id }}">{{ $c->nombre }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

@foreach ($categories as $c)
    <section class="section {{ $loop->even ? 'has-background-light' : '' }}" id="categoria-{{ $c->id }}">
        <div class="container">
            <h2 class="title is-3">{{ $c->nombre }}</h2>
            <p class="subtitle is-6 has-text-grey">{{ $c->descripcion }}</p>

            <div class="columns is-multiline">
                @foreach ($c->vehicles as $v)
                    <div class="column is-3">
                        @include('partials.vehicle-card', ['v' => $v])
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if ($loop->iteration == 2)
        <section class="hero is-black is-medium">
            <div class="hero-body">
                <div class="container">
                    <div class="has-background-primary mb-4" style="width: 4rem; height: 4px;"></div>
                    <p class="title is-2" style="max-width: 42rem;">Usted decide el ritmo. Nosotros ponemos el auto en condiciones.</p>
                </div>
            </div>
        </section>
    @endif
@endforeach

<section class="section">
    <div class="container">
        <p class="has-text-grey">¿No sabe cuál le conviene? Cuéntenos a dónde va y <a href="/contacto"><strong>le orientamos</strong></a>.</p>
    </div>
</section>

@endsection
