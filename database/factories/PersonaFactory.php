<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'primer_nombre'=>$this->faker->firstName(),
            'segundo_nombre'=>$this->faker->name(),
            'primer_apellido'=>$this->faker->lastName(),
            'segundo_apellido'=>$this->faker->lastName(),
            'fecha_creacion'=>$this->faker->date(),
            'fecha_modificacion'=>$this->faker->date(),
            'usuario_creacion'=>$this->faker->date(),
            'usuario_modificacion'=>$this->faker->date()
        ];
    }
}
