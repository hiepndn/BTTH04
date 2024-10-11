<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Students;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    protected $model = Students::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_name" => $this->faker->firstName(),
            "last_name" => $this->faker->lastName(),
            "email" => $this->faker->unique()->safeEmail(),
            "student_number" => $this->faker->unique()->numerify("TLU######")
        ];
    }
}
