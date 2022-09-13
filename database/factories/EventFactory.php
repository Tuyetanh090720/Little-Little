<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'eventName' => $this->faker->name(),
            'start_at' => $this->faker->dateTime(),
            'end_at' => $this->faker->dateTime(),
            'money' => $this->faker->randomNumber(),
            'eventDetail' => $this->faker->text(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
