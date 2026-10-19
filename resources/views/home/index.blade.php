@extends('layouts.app')

@section('titulo', 'Alquiler de autos en La Ceiba')

{{-- CSS solo de esta página --}}
@section('estilos')
<style>
    .pilar { border-top: 4px solid var(--bulma-primary); padding-top: 1rem; }
    .precio { font-size: 1.5rem; font-weight: 700; }
</style>
@endsection

@section('contenido')

{{-- HERO: lo primero que se ve --}}
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

{{-- TRES RAZONES DE CONFIANZA --}}
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

{{-- PARTE DE LA FLOTA --}}
<section class="section pt-0" id="flota">
    <div class="container">
        <h2 class="title is-3">Parte de nuestra flota</h2>
        <p class="subtitle is-6 has-text-grey">Precios por día, en lempiras.</p>

        <div class="columns is-multiline">
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Toyota Corolla 2022">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">Toyota</p>
                  <h3 class="title is-4 mb-3">Corolla 2022</h3>
                  <div class="tags">
                    <span class="tag is-light">Automática</span>
                    <span class="tag is-light">5 pasajeros</span>
                  </div>
                  <p class="precio">L 900 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="BMW Serie 4 Coupé">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">BMW</p>
                  <h3 class="title is-4 mb-3">BMW Serie 4 Coupé</h3>
                  <div class="tags">
                    <span class="tag is-light">Manual</span>
                    <span class="tag is-light">2 pasajeros</span>
                  </div>
                  <p class="precio">L 650 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Toyota RAV4 2022">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">Ford</p>
                  <h3 class="title is-4 mb-3">Ford Expedition</h3>
                  <div class="tags">
                    <span class="tag is-light">Automática</span>
                    <span class="tag is-light">5 pasajeros</span>
                  </div>
                  <p class="precio">L 1,400 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://www.ukcarline.co.uk/news/wp-content/uploads/2015/03/Volkswagen-Amarok.jpg" alt="Toyota Hilux 2022">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">Volkswagen</p>
                  <h3 class="title is-4 mb-3">Volkswagen Amarok Canyon</h3>
                  <div class="tags">
                    <span class="tag is-light">Manual</span>
                    <span class="tag is-light">5 pasajeros</span>
                    <span class="tag is-dark">4x4</span>
                  </div>
                  <p class="precio">L 1,500 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
        </div>

        <div class="buttons">
            <a class="button is-light" href="/vehiculos#sedanes">Gama Alta / Deportivos</a>
            <a class="button is-light" href="/vehiculos#hatchbacks">Deportivo Premium</a>
            <a class="button is-light" href="/vehiculos#camionetas">Camionetas</a>
            <a class="button is-light" href="/vehiculos#pickups">Pickups</a>
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

{{-- RUTAS --}}
<section class="section" id="rutas">
    <div class="container">
        <h2 class="title is-3">Rutas del litoral atlántico</h2>
        <p class="subtitle is-6 has-text-grey">Ocho lugares de Atlántida. Tiempos aproximados en auto desde La Ceiba; confirme el estado de la vía antes de salir.</p>

        <div class="columns is-multiline">
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-content">
                  <p class="has-text-primary has-text-weight-bold is-size-7">La Ceiba</p>
                  <h3 class="title is-5 mb-2">Parque Nacional Pico Bonito</h3>
                  <p>Selva húmeda y senderos al pie de la montaña que domina la ciudad.</p>
                  <p class="is-size-7 has-text-grey mt-2">20 min aprox. desde La Ceiba</p>
                </div>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-content">
                  <p class="has-text-primary has-text-weight-bold is-size-7">La Ceiba</p>
                  <h3 class="title is-5 mb-2">Río Cangrejal</h3>
                  <p>Aguas bravas, pozas y caminos de piedra. Ideal para una pickup.</p>
                  <p class="is-size-7 has-text-grey mt-2">25 min aprox. desde La Ceiba</p>
                </div>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-content">
                  <p class="has-text-primary has-text-weight-bold is-size-7">La Ceiba</p>
                  <h3 class="title is-5 mb-2">Sambo Creek</h3>
                  <p>Pueblo garífuna frente al mar; de aquí salen lanchas hacia los Cayos Cochinos.</p>
                  <p class="is-size-7 has-text-grey mt-2">25 min aprox. desde La Ceiba</p>
                </div>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-content">
                  <p class="has-text-primary has-text-weight-bold is-size-7">La Ceiba</p>
                  <h3 class="title is-5 mb-2">Refugio Cuero y Salado</h3>
                  <p>Canales, manglares y aves. Conviene salir temprano.</p>
                  <p class="is-size-7 has-text-grey mt-2">45 min aprox. desde La Ceiba</p>
                </div>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-content">
                  <p class="has-text-primary has-text-weight-bold is-size-7">Tela</p>
                  <h3 class="title is-5 mb-2">Jardín Botánico Lancetilla</h3>
                  <p>Uno de los jardines botánicos tropicales más grandes del mundo.</p>
                  <p class="is-size-7 has-text-grey mt-2">1 h 20 min aprox. desde La Ceiba</p>
                </div>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-content">
                  <p class="has-text-primary has-text-weight-bold is-size-7">Tela</p>
                  <h3 class="title is-5 mb-2">Bahía de Tela</h3>
                  <p>Playas amplias y un buen lugar para almorzar sin apuro.</p>
                  <p class="is-size-7 has-text-grey mt-2">1 h 15 min aprox. desde La Ceiba</p>
                </div>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-content">
                  <p class="has-text-primary has-text-weight-bold is-size-7">Tela</p>
                  <h3 class="title is-5 mb-2">Parque Nacional Jeannette Kawas</h3>
                  <p>Punta Sal: arena, selva y mar. El tramo final puede requerir lancha o caminata.</p>
                  <p class="is-size-7 has-text-grey mt-2">1 h 45 min aprox. desde La Ceiba</p>
                </div>
              </div>
            </div>
            <div class="column is-6-tablet is-3-desktop">
              <div class="card">
                <div class="card-content">
                  <p class="has-text-primary has-text-weight-bold is-size-7">Tela</p>
                  <h3 class="title is-5 mb-2">Triunfo de la Cruz</h3>
                  <p>Comunidad garífuna: pescado frito, tambores y mar abierto.</p>
                  <p class="is-size-7 has-text-grey mt-2">1 h 30 min aprox. desde La Ceiba</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="section has-background-light">
    <div class="container">
        <p class="has-text-grey">¿Le quedó alguna duda? Cuando lo desee, puede <a href="/contacto"><strong>escribirnos aquí</strong></a>. Sin apuro.</p>
    </div>
</section>

@endsection
