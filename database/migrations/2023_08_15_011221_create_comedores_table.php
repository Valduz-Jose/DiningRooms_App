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
        Schema::create('comedores', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->date('fecha')->default(now());
            $table->unsignedInteger('platos_diarios');
            $table->unsignedInteger('platos_acumulados')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comedores');
    }
};
