<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_name' => fake() -> name(),
            'departure_station' => fake() -> name(),
            'arrival_station' => fake() -> name(),
            'departure_time' => fake() -> dateTimeThisMonth(),
            'arrival_time' => fake() -> dateTimeThisMonth(),
            'number_of_wagons' => fake() -> randomDigitNotNull(),
            'in_time' => fake() -> boolean(),
            'deleted' => fake() -> boolean()
        ];
    }
}
