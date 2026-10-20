<div class="card">
    <div class="card-image">
        <figure class="image is-4by3">
            <img src="{{ $v->imagen ?? 'https://images.unsplash.com/photo-1494905998402-395d579af36f?auto=format&fit=crop&w=800&q=80' }}" alt="{{ $v->nombreCompleto() }}">
        </figure>
    </div>
    <div class="card-content">
        <p class="has-text-grey">{{ $v->marca }}</p>
        <h3 class="title is-4 mb-3">{{ $v->nombre }}</h3>
        <div class="tags">
            <span class="tag is-light">{{ $v->transmisionTexto() }}</span>
            <span class="tag is-light">{{ $v->pasajeros }} pasajeros</span>
        </div>
        <p class="precio">L {{ number_format($v->precio) }} <small class="has-text-grey">por día</small></p>
    </div>
    <footer class="card-footer">
        <a class="card-footer-item has-text-grey" href="/contacto?vehicle_id={{ $v->id }}">Consultar por este vehículo</a>
    </footer>
</div>
