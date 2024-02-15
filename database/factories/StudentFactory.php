<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'date_of_birth' => $this->faker->dateTimeBetween('-18 years', '-8 years')->format('Y-m-d'),
            'address' => $this->faker->streetAddress(),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'gender' => $gender,
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'zipcode' => $this->faker->postcode()
        ];
    }
}
