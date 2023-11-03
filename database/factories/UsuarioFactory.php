<?php

namespace Database\Factories;

use App\Models\persona;
use App\Models\roles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = roles::all();
        $persona = persona::all();
        return [
            'usuairo'=>$this->faker->name(),
            'clave'=>$this->faker->password(),
            'habilitado'=>$this->faker->boolean(),
            'fecha'=>$this->faker->date(),
            'fecha_creacion'=>$this->faker->date(),
            'fecha_modificacion'=>$this->faker->date(),
            'usuario_creacion'=>$this->faker->date(),
            'usuario_modificacion'=>$this->faker->date(),
            'roles_id'=>$this->faker->randomElement($roles)->id,
            'personas_id'=>$this->faker->randomElement($persona)->id
        ];
    }
}
