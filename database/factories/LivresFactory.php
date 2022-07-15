<?php

namespace Database\Factories;

use App\Models\Auteurs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LivresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
            return [
                'titre' => $this->faker->realText(30, 2),
                'extrait' => $this->faker->realText(200, 2),
                'auteurs_id'=> Auteurs::inRandomOrder()->first()->id,
                'created_at' => now(),
                'updated_at'=>now(),
            ];
      
    }
}
