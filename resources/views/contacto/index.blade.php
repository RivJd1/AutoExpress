@extends('layouts.app')

@section('titulo', 'Solicitar información')

@section('estilos')
<style>
    dt { font-weight: 700; margin-top: 0.8rem; }
    dd { margin: 0; color: #5f6368; }
</style>
@endsection

@section('contenido')

<section class="hero is-black is-small">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-2">Solicitar información</h1>
            <p class="subtitle is-5" style="max-width: 38rem;">Sin compromiso y sin prisa. Cuéntenos lo que necesita y le respondemos en horario de oficina.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-variable is-8">

            <div class="column is-7">

                <div id="gracias" class="notification is-success is-light is-hidden">
                    Gracias. Este formulario es solo una demostración visual: los datos no se envían ni se guardan.
                </div>

                <form onsubmit="event.preventDefault(); document.getElementById('gracias').classList.remove('is-hidden');">

                    <div class="field">
                        <label class="label" for="nombre">Nombre completo</label>
                        <div class="control">
                            <input id="nombre" class="input" type="text" required>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label class="label" for="telefono">Teléfono o WhatsApp</label>
                                <div class="control">
                                    <input id="telefono" class="input" type="tel" required>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label" for="correo">Correo (opcional)</label>
                                <div class="control">
                                    <input id="correo" class="input" type="email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="vehiculo">Vehículo de interés (opcional)</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select id="vehiculo">
                                    <option>Todavía no lo he decidido</option>
                                    <optgroup label="Sedanes">
                                        <option>Toyota Corolla 2022</option>
                                        <option>Chevrolet Camaro ZL1</option>
                                    </optgroup>
                                    <optgroup label="Hatchbacks">
                                        <option>BMW Serie 4 Coupé</option>
                                        <option>Chevrolet Camaro SS</option>
                                    </optgroup>
                                    <optgroup label="Camionetas">
                                        <option>Ford Expedition</option>
                                        <option>Ford Escape</option>
                                    </optgroup>
                                    <optgroup label="Pickups">
                                        <option>Toyota Hilux 2022</option>
                                        <option>Volkswagen Amarok Canyon</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label class="label" for="recogida">Fecha de recogida (opcional)</label>
                                <div class="control"><input id="recogida" class="input" type="date"></div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label" for="devolucion">Fecha de devolución (opcional)</label>
                                <div class="control"><input id="devolucion" class="input" type="date"></div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="mensaje">Mensaje (opcional)</label>
                        <div class="control"><textarea id="mensaje" class="textarea" rows="4"></textarea></div>
                    </div>

                    <button class="button is-primary is-medium has-text-weight-bold" type="submit">Enviar consulta</button>
                </form>
            </div>

            <div class="column is-5">
                <h2 class="title is-4">Nuestra oficina</h2>
                <dl>
                    <dt>Dirección</dt>
                    <dd>Barrio El Centro, 5.ª calle y 2.ª avenida, La Ceiba, Atlántida</dd>
                    <dt>Teléfono</dt>
                    <dd>+504 2400-0000</dd>
                    <dt>Correo</dt>
                    <dd>info@autorentaexpress.example</dd>
                    <dt>Horario</dt>
                    <dd>
                        Lunes a viernes: 7:30 a. m. a 5:30 p. m.<br>
                        Sábados: 8:00 a. m. a 1:00 p. m.<br>
                        Domingos y feriados: cerrado
                    </dd>
                </dl>

                <p class="help mt-2">Datos de contacto de ejemplo.</p>
            </div>

        </div>
    </div>
</section>

@endsection
