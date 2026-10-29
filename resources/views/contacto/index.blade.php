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
                @if (session('exito'))
                    <div class="notification is-success is-light">
                        Gracias, {{ session('exito') }}. Recibimos su solicitud y le responderemos en horario de oficina.
                    </div>
                @endif

                <form method="POST" action="/contacto">
                    @csrf

                    <div class="field">
                        <label class="label" for="nombre_completo">Nombre completo</label>
                        <div class="control">
                            <input id="nombre_completo" name="nombre_completo" type="text"
                                   class="input @error('nombre_completo') is-danger @enderror"
                                   value="{{ old('nombre_completo') }}">
                        </div>
                        @error('nombre_completo') <p class="help is-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label class="label" for="telefono">Teléfono o WhatsApp</label>
                                <div class="control">
                                    <input id="telefono" name="telefono" type="tel"
                                           class="input @error('telefono') is-danger @enderror"
                                           value="{{ old('telefono') }}">
                                </div>
                                @error('telefono') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label" for="correo">Correo (opcional)</label>
                                <div class="control">
                                    <input id="correo" name="correo" type="email"
                                           class="input @error('correo') is-danger @enderror"
                                           value="{{ old('correo') }}">
                                </div>
                                @error('correo') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="vehicle_id">Vehículo de interés (opcional)</label>
                        <div class="control">
                            <div class="select is-fullwidth @error('vehicle_id') is-danger @enderror">
                                <select id="vehicle_id" name="vehicle_id">
                                    <option value="">Todavía no lo he decidido</option>
                                    @foreach ($categories as $c)
                                        <optgroup label="{{ $c->nombre }}">
                                            @foreach ($c->vehicles as $v)
                                                <option value="{{ $v->id }}" @selected(old('vehicle_id', $selected) == $v->id)>
                                                    {{ $v->nombreCompleto() }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('vehicle_id') <p class="help is-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label class="label" for="fecha_recogida">Fecha de recogida (opcional)</label>
                                <div class="control">
                                    <input id="fecha_recogida" name="fecha_recogida" type="date"
                                           class="input @error('fecha_recogida') is-danger @enderror"
                                           value="{{ old('fecha_recogida') }}">
                                </div>
                                @error('fecha_recogida') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label" for="fecha_entrega">Fecha de entrega (opcional)</label>
                                <div class="control">
                                    <input id="fecha_entrega" name="fecha_entrega" type="date"
                                           class="input @error('fecha_entrega') is-danger @enderror"
                                           value="{{ old('fecha_entrega') }}">
                                </div>
                                @error('fecha_entrega') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="observacion">Observación (opcional)</label>
                        <div class="control">
                            <textarea id="observacion" name="observacion" rows="4"
                                      class="textarea @error('observacion') is-danger @enderror">{{ old('observacion') }}</textarea>
                        </div>
                        @error('observacion') <p class="help is-danger">{{ $message }}</p> @enderror
                    </div>

                    <button class="button is-primary is-medium has-text-weight-bold" type="submit">Enviar solicitud</button>
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
                    <dd>info@autorentaexpress.com</dd>
                    <dt>Horario</dt>
                    <dd>
                        Lunes a viernes: 7:30 a. m. a 5:30 p. m.<br>
                        Sábados: 8:00 a. m. a 1:00 p. m.<br>
                        Domingos y feriados: cerrado
                    </dd>
                </dl>

                <figure class="image is-3by2 mb-4">
                    <img src="https://koala.sh/api/image/v2-afuyr-b9lt9.jpg?width=1216&height=832&dream" alt="Oficina de AutoRenta Express">
                </figure>
            </div>

        </div>
    </div>
</section>

@endsection
