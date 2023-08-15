<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('viveres', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->unsignedInteger('cantidad');
            $table->enum('unidad_medida', ['Kilos', 'Litros', 'Cartones', 'Unidades']);
            $table->enum('ubicacion', ['bramon', 'palmita', '5patio']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viveres');
    }
};
