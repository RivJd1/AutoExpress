<?php

/*
|--------------------------------------------------------------------------
| Contenido de AutoRenta Express (datos de ejemplo)
|--------------------------------------------------------------------------
| Fotos: pegue la URL de la imagen o deje null para no mostrar una foto.
| Cada foto trae, en el comentario, qué buscar en unsplash.com/es.
*/

// Atajo para fotos de Unsplash a partir de su ID corto (lo que va al final de la URL de la foto).
$u = fn (string $id, int $w = 1400) => "https://unsplash.com/photos/{$id}/download?force=true&w={$w}";

return [

    'contacto' => [
        'telefono'  => '+504 2400-0000',
        'whatsapp'  => '50499000000',
        'correo'    => 'info@autorentaexpress.example',
        'direccion' => 'Barrio El Centro, 5.ª calle y 2.ª avenida, La Ceiba, Atlántida',
        'horario'   => [
            'Lunes a viernes: 7:30 a. m. a 5:30 p. m.',
            'Sábados: 8:00 a. m. a 1:00 p. m.',
            'Domingos y feriados: cerrado',
        ],
    ],

    'imagenes' => [
        'home_hero'        => null, // buscar: "La Ceiba Honduras" o "Honduras coast road"
        'home_frase'       => null, // buscar: "Pico Bonito" o "tropical road"
        'vehiculos_hero'   => null, // buscar: "car rental parking"
        'vehiculos_frase'  => null, // buscar: "road trip coast"
        'servicios_hero'   => null, // buscar: "car keys handover"
        'servicios_entrega'=> null, // buscar: "car key handover"
        'servicios_frase'  => null, // buscar: "tropical highway"
        'requisitos_hero'  => null, // buscar: "driver license"
        'nosotros_hero'    => null, // buscar: "Honduras city street"
        'nosotros_frase'   => null, // buscar: "Honduras beach"
        'solicitud_oficina'=> null, // buscar: "car rental office"
    ],

    'categorias' => [
        'sedanes'     => ['titulo' => 'Sedanes',     'texto' => 'Cómodos para la ciudad y la carretera hacia Tela.'],
        'hatchbacks'  => ['titulo' => 'Hatchbacks',  'texto' => 'Compactos y económicos para moverse por La Ceiba.'],
        'camionetas'  => ['titulo' => 'Camionetas',  'texto' => 'Más espacio para familias, equipaje y rutas largas.'],
        'pickups'     => ['titulo' => 'Pickups',     'texto' => 'Para caminos de montaña, río y carga ligera.'],
    ],

    // Vehículos que aparecen en la página de inicio
    'destacados' => ['toyota-corolla-2022', 'toyota-rav4-2022', 'toyota-hilux-2022', 'kia-picanto-2022'],

    // Precios diarios en lempiras (ficticios)
    'vehiculos' => [
        // buscar la foto de cada uno: "[marca] [modelo]"
        ['slug' => 'toyota-corolla-2022', 'categoria' => 'sedanes', 'marca' => 'Toyota', 'modelo' => 'Corolla', 'anio' => 2022, 'transmision' => 'Automática', 'pasajeros' => 5, 'precio' => 900, 'foto' => $u('DwNmXuRb1Tk')],
        ['slug' => 'hyundai-accent-2021', 'categoria' => 'sedanes', 'marca' => 'Hyundai', 'modelo' => 'Accent', 'anio' => 2021, 'transmision' => 'Manual', 'pasajeros' => 5, 'precio' => 750, 'foto' => null],

        ['slug' => 'kia-picanto-2022', 'categoria' => 'hatchbacks', 'marca' => 'Kia', 'modelo' => 'Picanto', 'anio' => 2022, 'transmision' => 'Manual', 'pasajeros' => 5, 'precio' => 650, 'foto' => null],
        ['slug' => 'suzuki-swift-2021', 'categoria' => 'hatchbacks', 'marca' => 'Suzuki', 'modelo' => 'Swift', 'anio' => 2021, 'transmision' => 'Automática', 'pasajeros' => 5, 'precio' => 700, 'foto' => null],

        ['slug' => 'toyota-rav4-2022', 'categoria' => 'camionetas', 'marca' => 'Toyota', 'modelo' => 'RAV4', 'anio' => 2022, 'transmision' => 'Automática', 'pasajeros' => 5, 'precio' => 1400, 'foto' => null],
        ['slug' => 'mitsubishi-montero-sport-2021', 'categoria' => 'camionetas', 'marca' => 'Mitsubishi', 'modelo' => 'Montero Sport', 'anio' => 2021, 'transmision' => 'Automática', 'pasajeros' => 7, 'precio' => 1600, 'extra' => '4x4', 'foto' => null],

        ['slug' => 'toyota-hilux-2022', 'categoria' => 'pickups', 'marca' => 'Toyota', 'modelo' => 'Hilux', 'anio' => 2022, 'transmision' => 'Manual', 'pasajeros' => 5, 'precio' => 1500, 'extra' => '4x4', 'foto' => $u('TmIEOZNm20s')],
        ['slug' => 'volkswagen-amarok-2021', 'categoria' => 'pickups', 'marca' => 'Volkswagen', 'modelo' => 'Amarok', 'anio' => 2021, 'transmision' => 'Automática', 'pasajeros' => 5, 'precio' => 1600, 'extra' => '4x4', 'foto' => $u('iH5Q0k_4S4o')],
    ],

    // Ocho lugares del departamento de Atlántida. Tiempos aproximados en auto desde La Ceiba.
    'rutas' => [
        ['nombre' => 'Parque Nacional Pico Bonito', 'zona' => 'La Ceiba', 'tiempo' => '20 min aprox.', 'texto' => 'Selva húmeda y senderos al pie de la montaña que domina la ciudad.', 'foto' => null /* buscar: "Pico Bonito" */],
        ['nombre' => 'Río Cangrejal', 'zona' => 'La Ceiba', 'tiempo' => '25 min aprox.', 'texto' => 'Aguas bravas, pozas y caminos de piedra. Ideal para una pickup.', 'foto' => null /* buscar: "Cangrejal river" */],
        ['nombre' => 'Sambo Creek', 'zona' => 'La Ceiba', 'tiempo' => '25 min aprox.', 'texto' => 'Pueblo garífuna frente al mar; de aquí salen lanchas hacia los Cayos Cochinos.', 'foto' => null /* buscar: "Sambo Creek" */],
        ['nombre' => 'Refugio Cuero y Salado', 'zona' => 'La Ceiba', 'tiempo' => '45 min aprox.', 'texto' => 'Canales, manglares y aves. Conviene salir temprano.', 'foto' => null /* buscar: "Cuero y Salado" */],
        ['nombre' => 'Jardín Botánico Lancetilla', 'zona' => 'Tela', 'tiempo' => '1 h 20 min aprox.', 'texto' => 'Uno de los jardines botánicos tropicales más grandes del mundo.', 'foto' => null /* buscar: "Lancetilla" */],
        ['nombre' => 'Bahía de Tela', 'zona' => 'Tela', 'tiempo' => '1 h 15 min aprox.', 'texto' => 'Playas amplias y un buen lugar para almorzar sin apuro.', 'foto' => null /* buscar: "Tela Honduras beach" */],
        ['nombre' => 'Parque Nacional Jeannette Kawas', 'zona' => 'Tela', 'tiempo' => '1 h 45 min aprox.', 'texto' => 'Punta Sal: arena, selva y mar. El tramo final puede requerir lancha o caminata.', 'foto' => null /* buscar: "Punta Sal Honduras" */],
        ['nombre' => 'Triunfo de la Cruz', 'zona' => 'Tela', 'tiempo' => '1 h 30 min aprox.', 'texto' => 'Comunidad garífuna: pescado frito, tambores y mar abierto.', 'foto' => null /* buscar: "Triunfo de la Cruz" */],
    ],
];
