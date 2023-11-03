<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(BitacoraSeeder::class);
        $this->call(PaginaSeeder::class);
        $this->call(EnlaceSeeder::class);
       
        
        

    }
}
