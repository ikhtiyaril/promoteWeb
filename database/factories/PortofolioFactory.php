<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Portofolio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portofolio>
 */
class PortofolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'image' => $this->faker->imageUrl(640, 480, 'projects', true),
            'tech_stack' => json_encode($this->faker->randomElements([
                'Laravel', 'React', 'Node.js', 'Vue', 'Tailwind', 'MySQL', 'MongoDB', 'Express'
            ], rand(2, 4))),
            'judul' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'link_web' => $this->faker->url(),
            'link_github' => 'https://github.com/' . $this->faker->userName . '/' . $this->faker->word, 
        ];
    }
}
