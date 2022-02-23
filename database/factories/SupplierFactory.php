<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Supplier::class;
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'name_supplier' => $this->faker->word(),
            'telephone' => $this->faker->numberBetween(),
            'email' => $this->faker->unique()->safeEmail(),
            'products_id' => $this->faker->randomElement($array = array ('1','2','3', '4', '5')),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
}
