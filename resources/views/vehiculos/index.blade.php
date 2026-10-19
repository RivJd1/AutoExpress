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
            <p class="subtitle is-5" style="max-width: 38rem;">Ocho vehículos en cuatro categorías. Precio por día en lempiras. Imágenes ilustrativas.</p>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <h2 class="title is-3">Gama Alta / Deportivos</h2>
        <p class="subtitle is-6 has-text-grey">Cómodos para la ciudad y la carretera hacia Tela.</p>
        <div class="columns is-multiline">
            <div class="column is-6">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Porsche Panamera Turbo">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">Porsche</p>
                  <h3 class="title is-4 mb-3">Panamera Turbo 2022</h3>
                  <div class="tags">
                    <span class="tag is-light">Automática</span>
                    <span class="tag is-light">2 pasajeros</span>
                  </div>
                  <p class="precio">L 900 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
            <div class="column is-6">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Hyundai Accent 2021">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">Chevrolet</p>
                  <h3 class="title is-4 mb-3">Chevrolet Camaro ZL1</h3>
                  <div class="tags">
                    <span class="tag is-light">Manual</span>
                    <span class="tag is-light">2 pasajeros</span>
                  </div>
                  <p class="precio">L 750 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="section has-background-light">
    <div class="container">
        <h2 class="title is-3">Deportivo Premium</h2>
        <p class="subtitle is-6 has-text-grey">Compactos y económicos para moverse por La Ceiba.</p>
        <div class="columns is-multiline">
            <div class="column is-6">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Kia Picanto 2022">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">BMW</p>
                  <h3 class="title is-4 mb-3">BMW Serie 4 Coupé</h3>
                  <div class="tags">
                    <span class="tag is-light">Manual</span>
                    <span class="tag is-light">5 pasajeros</span>
                  </div>
                  <p class="precio">L 650 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
            <div class="column is-6">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Suzuki Swift 2021">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">Chevrolet</p>
                  <h3 class="title is-4 mb-3">Chevrolet Camaro SS</h3>
                  <div class="tags">
                    <span class="tag is-light">Automática</span>
                    <span class="tag is-light">5 pasajeros</span>
                  </div>
                  <p class="precio">L 700 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="title is-3">Camionetas</h2>
        <p class="subtitle is-6 has-text-grey">Más espacio para familias, equipaje y rutas largas.</p>
        <div class="columns is-multiline">
            <div class="column is-6">
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
            <div class="column is-6">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://storage.googleapis.com/www.savvydealer.com/new/Ford/Escape/All-Trims/2023/Features/2023-Ford-Escape-Towing.webp" alt="Mitsubishi Montero Sport 2021">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">Ford</p>
                  <h3 class="title is-4 mb-3">Ford Escape</h3>
                  <div class="tags">
                    <span class="tag is-light">Automática</span>
                    <span class="tag is-light">7 pasajeros</span>
                    <span class="tag is-dark">4x4</span>
                  </div>
                  <p class="precio">L 1,600 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="section has-background-light">
    <div class="container">
        <h2 class="title is-3">Pickups</h2>
        <p class="subtitle is-6 has-text-grey">Para caminos de montaña, río y carga ligera.</p>
        <div class="columns is-multiline">
            <div class="column is-6">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/toyotahiluxgrsport1-1641207031.jpg?crop=0.75xw:1xh;center,top&resize=1200:*" alt="Toyota Hilux 2022">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">Toyota</p>
                  <h3 class="title is-4 mb-3">Hilux 2022</h3>
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
            <div class="column is-6">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://www.ukcarline.co.uk/news/wp-content/uploads/2015/03/Volkswagen-Amarok.jpg" alt="Volkswagen Amarok 2021">
                  </figure>
                </div>
                <div class="card-content">
                  <p class="has-text-grey">Volkswagen</p>
                  <h3 class="title is-4 mb-3">Volkswagen Amarok Canyon</h3>
                  <div class="tags">
                    <span class="tag is-light">Automática</span>
                    <span class="tag is-light">5 pasajeros</span>
                    <span class="tag is-dark">4x4</span>
                  </div>
                  <p class="precio">L 1,600 <small class="has-text-grey">por día</small></p>
                </div>
                <footer class="card-footer">
                  <a class="card-footer-item has-text-grey" href="/contacto">Consultar por este vehículo</a>
                </footer>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <p class="has-text-grey">¿No sabe cuál le conviene? Cuéntenos a dónde va y <a href="/contacto"><strong>le orientamos</strong></a>.</p>
    </div>
</section>

@endsection
