<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
    protected $fillable = [
        'category_id', 'marca', 'nombre', 'pasajeros', 'transmision', 'precio', 'imagen',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

    public function nombreCompleto(): string
    {
        return "{$this->marca} {$this->nombre}";
    }

    public function transmisionTexto(): string
    {
        return $this->transmision === 'automatico' ? 'Automática' : 'Manual';
    }
}
