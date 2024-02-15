<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = [
            "Mathematics",
            "Science",
            "English",
            "History",
            "Geography",
            "Art",
            "Music",
            "Physical Education",
            "Computer Science",
            "Foreign Language"
        ];

        return [
            'student_id' => Student::factory(),
            'subject' => $this->faker->randomElement($subjects),
            'value' => $this->faker->randomFloat(2, 1, 10),
            'date' => $this->faker->dateTimeBetween('-2 years')->format('Y-m-d')
        ];
    }
}
