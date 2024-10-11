<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Theses;
use App\Models\Students;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Theses>
 */
class ThesesFactory extends Factory
{
    protected $model = Theses::class ;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(),
            "student_id" => Students::inRandomOrder()->first()->id,
            "program" => $this->faker->randomElement(["Information System", "AI", "CNTT", "Applician Technique"]),
            "supervisor" => $this->faker->name(),
            "abstract" => $this->faker->paragraph(),
            "submission_date" => $this->faker->date(),
            "defense_date" => $this->faker->date(),
        ];
    }
}
