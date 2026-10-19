<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Fluent;

/**
 * Modelo de vehículo. Lee sus datos de config/autorenta.php (sin base de datos).
 * Si más adelante usa una tabla, este modelo se cambia por uno Eloquent
 * y los controladores y las vistas casi no cambian.
 */
class Vehiculo extends Fluent
{
    public static function todos(): Collection
    {
        return collect(config('autorenta.vehiculos'))->map(fn ($datos) => new static($datos));
    }

    public static function destacados(): Collection
    {
        return static::todos()->whereIn('slug', config('autorenta.destacados'))->values();
    }

    public function nombreCompleto(): string
    {
        return "{$this->marca} {$this->modelo} {$this->anio}";
    }

    public function precioFormateado(): string
    {
        return 'L '.number_format($this->precio);
    }
}
