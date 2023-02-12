<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            // 'user_id' => User::factory(), // Sirve para indicar que cada vez que se cree un proyecto, se cree un usuario y nos asigne el id del usuario que se ha creado.
            // 'user_id' => $this->faker->numberBetween(1, 3), // En el UserSeeder le he dicho que cree solo tres usuarios. Aquí le estamos diciendo que cada vez que se cree un proyecto, nos asigne un id aleatorio entre 1 y 3.
            'user_id' => $this->faker->numberBetween(1, 3), // Importante añadir el id del usuario que ha creado el proyecto.
            'title' => $this->faker->text(50),
            'subtitle' => $this->faker->text(50),
            'description' => $this->faker->text(500),
            'cover_image' => $this->faker->imageUrl(),
            'url_repo' => $this->faker->url(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
