<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++)
        {
        	Product::create([
        		'name' => $faker->city,
        		'price' => $faker->randomDigit,
        		'img'   => $faker->url,
        	]);
        }
    }
}
