<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\roles>
 */
class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rol'=>$this->faker->randomElement(['admin', 'admin_afiliados', 'user', 'afiliados']),
            'fecha_creacion'=>$this->faker->date(),
            'fecha_modificacion'=>$this->faker->date(),
            'usuario_creacion'=>$this->faker->date(),
            'usuario_modificacion'=>$this->faker->date(),
        ];
    }
}
