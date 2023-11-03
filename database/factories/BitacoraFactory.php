<?php

namespace Database\Factories;

use App\Models\usuario;
use Database\Seeders\UsuarioSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bitacora>
 */
class BitacoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usuario = usuario::all();
        return [
            'bitacora'=>$this->faker->text(),
            'fecha'=>$this->faker->date(),
            'hora'=>$this->faker->time(),
            'ip'=>$this->faker->ipv4(),
            'so'=>$this->faker->text(),
            'navegador'=>$this->faker->chrome(),
            'usuario'=>$this->faker->name(),
            'usuarios_id'=>$this->faker->randomElement($usuario)->id,
        ];
    }
}
