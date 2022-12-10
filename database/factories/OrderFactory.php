<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customerId' => $this->faker->numberBetween($min = 1, $max = 3),
            'ticketTypeId' => $this->faker->numberBetween($min = 1, $max = 3),
            'totalMoney' => $this->faker->randomNumber(),
            'quantity' => $this->faker->randomDigit(),
            'cardNumber' => $this->faker->phoneNumber(),
            'cardName' => $this->faker->name(),
            'cardExpiryMonth' => $this->faker->randomDigit(),
            'cardExpiryYear' => $this->faker->randomDigit(),
            'cardCVC' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'paymentStatus' => $this->faker->sentence(3, true),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
