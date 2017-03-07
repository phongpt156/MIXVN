<?php

use Illuminate\Database\Seeder;

class ProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for($i = 1; $i < 49; $i++)
        {
        	DB::table('product_image')->insert([
        	['alt' => $faker->word, 'name' => 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', 'product_id' => $i]
        ]);
        }
    }
}
