<?php

namespace Database\Factories;

use App\Models\ExitProducts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ExitProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => $this->faker->randomElement($array = array ('1','2','3', '4', '5')),
            'products_id' => $this->faker->randomElement($array = array ('1','2','3', '4', '5')),
            'amount_products' => $this->faker->randomDigitNot(5),
            'value' => $this->faker->randomDigitNot(5),
        ];
    }
}
