<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkExperience>
 */
class WorkExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'company' => fake()->company(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'role' => fake()->jobTitle(),
        ];
    } 

    public function current()
    {
        return $this->state(function(){
            return [
                'end_date' => null,
                // 'is_current' => true,
            ];
        });
    }
}
