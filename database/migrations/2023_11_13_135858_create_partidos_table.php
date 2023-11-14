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
            
            $table->enum('campo', ['local','visitante','pendiente'])->default('pendiente');
    
            $table->integer('goles_local');
            $table->integer('goles_visitante');
    
            $table->unsignedBigInteger('equipo_local_id')->nullable();
            $table->unsignedBigInteger('equipo_visitante_id')->nullable();

            $table->timestamps();

            $table->foreign('equipo_local_id')->references('id')->on('equipos')
            ->onDelete('set null');
            $table->foreign('equipo_visitante_id')->references('id')->on('equipos')
            ->onDelete('set null');
            
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
