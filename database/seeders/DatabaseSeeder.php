<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'nombre' => 'Novela',
            'descripcion' => 'Libros narrativos'
        ]);

        Category::create([
            'nombre' => 'Tecnología',
            'descripcion' => 'Libros técnicos'
        ]);

        Category::create([
            'nombre' => 'Historia',
            'descripcion' => 'Libros históricos'
        ]);

        Category::create([
            'nombre' => 'Ciencia Ficción',
            'descripcion' => 'Libros futuristas'
        ]);
    }
}