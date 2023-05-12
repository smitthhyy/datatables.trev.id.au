<?php
/**
 * AddressFactory.php
 * Project: ${PROJECT_NAME}
 * Author: ${USER}
 * 11/05/2023 11:40 am
 * Copyright Trevor van der Linden, IoT Systems Design Pty Ltd. All rights reserved.
 */

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition()
    {
        return [
            'street' => $this->faker->streetName(),
            'city' => $this->faker->city(),
            'state' => $this->faker->word(),
            'postcode' => $this->faker->postcode(),
            'country' => $this->faker->country(),
        ];
    }
}
