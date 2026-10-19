<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Fluent;

/** Categoría de vehículos (sedanes, pickups...) con sus vehículos incluidos. */
class Categoria extends Fluent
{
    /** Todas las categorías, indexadas por clave y con su propiedad ->vehiculos. */
    public static function todas(): Collection
    {
        $vehiculos = Vehiculo::todos();

        return collect(config('autorenta.categorias'))->map(
            fn ($datos, $clave) => new static($datos + [
                'clave'     => $clave,
                'vehiculos' => $vehiculos->where('categoria', $clave)->values(),
            ])
        );
    }
}
