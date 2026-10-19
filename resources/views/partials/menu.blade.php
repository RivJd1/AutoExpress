{{-- Menú de navegación. Cada <a href="..."> lleva a otra página. --}}
<nav class="navbar is-black is-fixed-top" role="navigation" aria-label="Menú principal">
    <div class="container">

        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <span class="tag is-primary mr-2">AR</span>
                <strong class="has-text-white">AutoRenta Express</strong>
            </a>
            {{-- Botón de 3 rayitas (solo se ve en celular) --}}
            <a role="button" class="navbar-burger" id="burger" aria-label="Abrir menú">
                <span></span><span></span><span></span><span></span>
            </a>
        </div>

        <div class="navbar-menu" id="menu">
            {{-- margin-left:auto + el margin-right automático de Bulma = enlaces centrados --}}
            <div class="navbar-start" style="margin-left: auto;">
                <a class="navbar-item" href="/">Inicio</a>
                <a class="navbar-item" href="/vehiculos">Vehículos</a>

                {{-- Botón destacado en el centro del menú --}}
                <div class="navbar-item">
                    <a class="button is-primary has-text-weight-bold" href="/contacto">Solicitar información</a>
                </div>

                <a class="navbar-item" href="/servicios">Servicios</a>
                <a class="navbar-item" href="/requisitos">Requisitos</a>
                <a class="navbar-item" href="/nosotros">Nosotros</a>
            </div>
        </div>

    </div>
</nav>

{{-- Abre y cierra el menú en celular --}}
<script>
    document.getElementById('burger').onclick = function () {
        this.classList.toggle('is-active');
        document.getElementById('menu').classList.toggle('is-active');
    };
</script>
