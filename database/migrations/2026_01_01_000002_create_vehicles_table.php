<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            // Llave foránea: apunta a categories.id (no deja borrar una categoría que tenga vehículos)
            $table->foreignId('category_id')->constrained();
            $table->string('marca');
            $table->string('nombre');                       // modelo y año, ej. "Corolla 2022"
            $table->unsignedTinyInteger('pasajeros');
            $table->enum('transmision', ['manual', 'automatico']);
            $table->unsignedInteger('precio');              // por día, en lempiras
            $table->string('imagen', 500)->nullable();      // URL de la foto (internet)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
