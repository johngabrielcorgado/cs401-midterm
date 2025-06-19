<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => $this->faker->word,
            'course_code' => strtoupper($this->faker->bothify('??###')),
            'credits' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->sentence,
        ];
    }
}
