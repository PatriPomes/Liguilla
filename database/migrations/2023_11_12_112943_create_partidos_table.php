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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_partido')->nullable();
            $table->time('hora_partido')->nullable();
            $table->string('contrincante');
            $table->enum('campo', ['casa','contrincante','pendiente'])->default('pendiente');
            $table->enum('resultado',['victoria','derrota','empate','pendiente'])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
