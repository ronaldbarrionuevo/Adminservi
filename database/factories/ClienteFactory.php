<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'descripcion_cliente' => $this->faker->name(),
            'telefono' => $this->faker->numberBetween(1,50),
            'direccion' => $this->faker->text(),
            'estado' => $this->faker->numberBetween(1,20),
            
        ];
    }
}
