<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'program' => $this->faker->word,
            'enrollment_year' => (string) $this->faker->year,
            'birthday' => $this->faker->dateTimeBetween('-25 years', '-16 years'),
            'student_number' => 'S' . $this->faker->unique()->numberBetween(1000, 9999),
    ];
    }
}
