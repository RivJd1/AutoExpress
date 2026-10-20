<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->nullable()->constrained()->nullOnDelete();
            $table->string('nombre_completo');
            $table->string('telefono', 25);
            $table->string('correo')->nullable();
            $table->date('fecha_recogida')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->text('observacion')->nullable();
            $table->string('estado')->default('nueva');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
