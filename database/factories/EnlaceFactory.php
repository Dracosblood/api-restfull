<?php

namespace Database\Factories;

use App\Models\pagina;
use App\Models\roles;
use Database\Seeders\PaginaSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\enlace>
 */
class EnlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = roles::all();
        $pagina = pagina::all();
        return [
            'descripcion'=>$this->faker->text(),
            'fecha_creacion'=>$this->faker->date(),
            'fecha_modificacion'=>$this->faker->date(),
            'usuario_creacion'=>$this->faker->date(),
            'usuario_modificacion'=>$this->faker->date(),
            'roles_id'=>$this->faker->randomElement($roles)->id,
            'paginas_id'=>$this->faker->randomElement($pagina)->id
        ];
    }
}
