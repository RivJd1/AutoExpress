<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Fluent;

/** Lugar recomendado del litoral atlántico. */
class Ruta extends Fluent
{
    public static function todas(): Collection
    {
        return collect(config('autorenta.rutas'))->map(fn ($datos) => new static($datos));
    }
}
