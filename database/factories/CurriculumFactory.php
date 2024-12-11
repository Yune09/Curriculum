<?php

namespace Database\Factories;

use App\Models\Curriculum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curriculum>
 */
class CurriculumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Curriculum::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(), 
            'professional_profile' => $this->faker->text(),
            'skills' => $this->faker->text(),
            'work_experience' => $this->faker->paragraph(), 
            'education' => $this->faker->paragraph(), 
            
        ];
    }
}
