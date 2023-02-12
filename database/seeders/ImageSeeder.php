<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::factory(300)->create(); // Indicamos que queremos 300 imágenes. Irá relacionado a los 20 proyectos que hemos creado en ProjectSeeder.php
    }
}
