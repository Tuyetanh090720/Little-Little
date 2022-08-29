<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ticketType;
use App\Models\customer;

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
            'customerId' => factory(customer::class)->create()->customerId,
            'ticketTypeId' => factory(ticketType::class)->create()->ticketTypeId,
            'totalMoney' => $this->faker->randomNumber(),
            'quantity' => $this->faker->randomDigit(),
            'cardNumber' => $this->faker->phoneNumber(),
            'cardName' => $this->faker->name(),
            'paymentExpiration' => $this->faker->dateTime(),
            'CVC' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'paymentStatus' => $this->faker->sentence(3, true),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
