@extends('layouts.app')

@section('titulo', 'Solicitar información')
@section('descripcion', 'Contacto y atención al cliente de AutoRenta Express en La Ceiba.')

@push('estilos')
    <link rel="stylesheet" href="{{ asset('css/solicitud.css') }}">
@endpush

@section('contenido')

<x-encabezado tamano="is-small">
    <h1 class="title is-2 titulo-grande">Solicitar información</h1>
    <p class="subtitle is-5 texto-medida mt-3">Sin compromiso y sin prisa. Cuéntenos lo que necesita y le respondemos en horario de oficina.</p>
</x-encabezado>

<section class="section">
    <div class="container">
        <div class="columns is-variable is-8">

            <div class="column is-7">
                @if (session('enviado'))
                    <div class="notification is-success is-light" role="status">
                        Gracias, {{ session('enviado') }}. Recibimos su consulta y le responderemos en horario de oficina.
                    </div>
                @endif

                <form method="POST" action="{{ route('solicitud.store') }}" novalidate>
                    @csrf


                    <div class="campo-oculto" aria-hidden="true">
                        <label>No llenar este campo <input type="text" name="sitio_web" tabindex="-1" autocomplete="off"></label>
                    </div>

                    <div class="field">
                        <label class="label" for="nombre">Nombre completo</label>
                        <div class="control">
                            <input id="nombre" name="nombre" type="text" autocomplete="name" value="{{ old('nombre') }}" class="input @error('nombre') is-danger @enderror">
                        </div>
                        @error('nombre') <p class="help is-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label class="label" for="telefono">Teléfono o WhatsApp</label>
                                <div class="control">
                                    <input id="telefono" name="telefono" type="tel" autocomplete="tel" value="{{ old('telefono') }}" class="input @error('telefono') is-danger @enderror">
                                </div>
                                @error('telefono') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label" for="correo">Correo <span class="has-text-weight-normal">(opcional)</span></label>
                                <div class="control">
                                    <input id="correo" name="correo" type="email" autocomplete="email" value="{{ old('correo') }}" class="input @error('correo') is-danger @enderror">
                                </div>
                                @error('correo') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    @php($elegido = old('vehiculo', request('vehiculo')))
                    <div class="field">
                        <label class="label" for="vehiculo">Vehículo de interés <span class="has-text-weight-normal">(opcional)</span></label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select id="vehiculo" name="vehiculo">
                                    <option value="">Todavía no lo he decidido</option>
                                    @foreach ($grupos as $g)
                                        <optgroup label="{{ $g->titulo }}">
                                            @foreach ($g->vehiculos as $v)
                                                <option value="{{ $v->slug }}" @selected($elegido === $v->slug)>{{ $v->nombreCompleto() }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label class="label" for="fecha_recogida">Fecha de recogida <span class="has-text-weight-normal">(opcional)</span></label>
                                <div class="control">
                                    <input id="fecha_recogida" name="fecha_recogida" type="date" value="{{ old('fecha_recogida') }}" class="input @error('fecha_recogida') is-danger @enderror">
                                </div>
                                @error('fecha_recogida') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label" for="fecha_devolucion">Fecha de devolución <span class="has-text-weight-normal">(opcional)</span></label>
                                <div class="control">
                                    <input id="fecha_devolucion" name="fecha_devolucion" type="date" value="{{ old('fecha_devolucion') }}" class="input @error('fecha_devolucion') is-danger @enderror">
                                </div>
                                @error('fecha_devolucion') <p class="help is-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="entrega">Recogida del vehículo <span class="has-text-weight-normal">(opcional)</span></label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select id="entrega" name="entrega">
                                    <option value="">Sin preferencia</option>
                                    <option value="oficina" @selected(old('entrega') === 'oficina')>Recogeré en la oficina</option>
                                    <option value="direccion" @selected(old('entrega') === 'direccion')>Quiero consultar entrega en otra dirección</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="mensaje">Mensaje <span class="has-text-weight-normal">(opcional)</span></label>
                        <div class="control">
                            <textarea id="mensaje" name="mensaje" rows="4" class="textarea @error('mensaje') is-danger @enderror">{{ old('mensaje') }}</textarea>
                        </div>
                        @error('mensaje') <p class="help is-danger">{{ $message }}</p> @enderror
                    </div>

                    <div class="field mt-5">
                        <button type="submit" class="button is-primary is-medium has-text-weight-bold">Enviar consulta</button>
                        <p class="help mt-3">Usamos sus datos solo para responder esta consulta.</p>
                    </div>
                </form>
            </div>

            <div class="column is-5">
                <h2 class="title is-4">Nuestra oficina</h2>
                <dl class="contacto-datos">
                    <dt>Dirección</dt>
                    <dd>{{ config('autorenta.contacto.direccion') }}</dd>
                    <dt>Teléfono</dt>
                    <dd><a href="tel:{{ preg_replace('/[^0-9+]/', '', config('autorenta.contacto.telefono')) }}">{{ config('autorenta.contacto.telefono') }}</a></dd>
                    <dt>WhatsApp</dt>
                    <dd><a href="https://wa.me/{{ config('autorenta.contacto.whatsapp') }}" target="_blank" rel="noopener">Escribir por WhatsApp</a></dd>
                    <dt>Correo</dt>
                    <dd><a href="mailto:{{ config('autorenta.contacto.correo') }}">{{ config('autorenta.contacto.correo') }}</a></dd>
                    <dt>Horario</dt>
                    <dd>
                        @foreach (config('autorenta.contacto.horario') as $linea)
                            {{ $linea }}<br>
                        @endforeach
                    </dd>
                </dl>

            </div>
        </div>
    </div>
</section>

@endsection
