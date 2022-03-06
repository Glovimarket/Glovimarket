<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Supplier;
use App\Models\ExitProducts;
use App\Models\Income;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Rol::factory(3)->create();
        Categories::factory(5)->create();
        Products::factory(10)->create();
        Supplier::factory(10)->create();
        ExitProducts::factory(10)->create();
        Income::factory(10)->create();
    }
}
