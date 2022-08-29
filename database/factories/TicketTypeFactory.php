<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ticketTypeName' => $this->faker->name(),
            'money' => $this->faker->randomNumber(),
            'ticketTypeHeight' => $this->faker->sentence(5, true),
            'weekdays' => $this->faker->sentence(2, true),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
