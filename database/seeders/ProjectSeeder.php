<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory(20)->create(); // Indicamos que queremos 20 proyectos. Irán relacionados con las imágenes que hemos creado en ImageSeeder.php, con los tags que hemos creado en TagSeeder.php y con los users que hemos creado en UserSeeder.php
    }
}
