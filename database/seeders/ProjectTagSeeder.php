<?php

namespace Database\Seeders;

use App\Models\ProjectTag;
use Illuminate\Database\Seeder;

class ProjectTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear un array con los id de los proyectos.
        ProjectTag::factory(40)->create(); // no debemos pasarnos de 40, ya que tenemos 20 proyectos y 20 tags y deben ser únicos, por lo que el máximo de relaciones que podemos crear es 20 * 20 = 400
    }
}
