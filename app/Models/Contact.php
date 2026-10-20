<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $fillable = [
        'vehicle_id', 'nombre_completo', 'telefono', 'correo',
        'fecha_recogida', 'fecha_entrega', 'observacion', 'estado',
    ];

    protected function casts(): array
    {
        return [
            'fecha_recogida' => 'date',
            'fecha_entrega'  => 'date',
        ];
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }
}
