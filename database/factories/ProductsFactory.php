<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Products::class;
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'amount' => $this->faker->randomNumber(),
            'price' => $this->faker->randomNumber(),
            'categories_id' => $this->faker->randomElement($array = array ('1','2','3')),
            'description' => $this->faker->sentence(),
            'url'=>'/storage/qQGn7ZY5icKoiHsuEA7GyvGyt3jHfwqZNuEEBMkv.png',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
}
