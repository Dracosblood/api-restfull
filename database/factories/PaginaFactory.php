<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pagina>
 */
class PaginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url'=>$this->faker->url(),
            'estado'=>$this->faker->city(),
            'nombre'=>$this->faker->name(),
            'descripcion'=>$this->faker->text(),
            'fecha_creacion'=>$this->faker->date(),
            'fecha_modificacion'=>$this->faker->date(),
            'usuario_creacion'=>$this->faker->date(),
            'usuario_modificacion'=>$this->faker->date(),
        ];
    }
}
