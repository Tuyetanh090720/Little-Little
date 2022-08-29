<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contactName'  => $this->faker->name(),
            'contactPhone' => $this->faker->phoneNumber(),
            'contactEmail' => $this->faker->email(),
            'contactAddress' => $this->faker->address(),
            'contactMessage' => $this->faker->sentence(6, true),
            'contactStatus' => $this->faker->sentence(3, true),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
