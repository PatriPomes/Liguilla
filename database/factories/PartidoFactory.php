<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partido>
 */
class PartidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totalEquipos = Equipo::count();
        $idEquipoLocal = rand(1, $totalEquipos);
        do {
            $idEquipoVisitante = rand(1, $totalEquipos);
        } while ($idEquipoVisitante == $idEquipoLocal);


        return [
            'fecha_partido'=>$this->faker->date('y-m-d'),
            'hora_partido'=>$this->faker->time(),
            'campo'=>$this->faker->randomElement(['local','visitante','pendiente']),
            'goles_local'=>$this->faker->numberBetween(0,9),
            'goles_visitante'=>$this->faker->numberBetween(0,9),

            'equipo_local_id'=>$idEquipoLocal,
            'equipo_visitante_id'=>$idEquipoVisitante,
        ];
    }
}
