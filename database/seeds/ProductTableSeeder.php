<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
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
        for($i = 0; $i < 6; $i++)
        {
        	DB::table('product')->insert([
	        	['name' => 'áo len', 'price' => '100.000', 'like' => 1275, 'discount' => $faker->numberBetween($min = 600, $max = 9000), 'description' => $faker->word, 'cate_id' => 1, 'supplier_id' => 1, 'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')],
	        	['name' => 'áo len', 'price' => '780.000', 'like' => 1275, 'discount' => $faker->numberBetween($min = 600, $max = 9000), 'description' => $faker->word, 'cate_id' => 1, 'supplier_id' => 2, 'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')],
	        	['name' => 'áo khoác xanh', 'price' => '250.000', 'like' => 1008, 'discount' => $faker->numberBetween($min = 600, $max = 9000), 'description' => $faker->word, 'cate_id' => 1, 'supplier_id' => 3, 'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')],
	        	['name' => 'áo khoác xanh', 'price' => '1000.000', 'like' => 1008, 'discount' => $faker->numberBetween($min = 600, $max = 9000), 'description' => $faker->word, 'cate_id' => 1, 'supplier_id' => 4, 'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')],
	        	['name' => 'cardigan xám', 'price' => '350.000', 'like' => 945, 'discount' => $faker->numberBetween($min = 600, $max = 9000), 'description' => $faker->word, 'cate_id' => 1, 'supplier_id' => 1, 'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')],
	        	['name' => 'cardigan xám', 'price' => '450.000', 'like' => 945, 'discount' => $faker->numberBetween($min = 600, $max = 9000), 'description' => $faker->word, 'cate_id' => 1, 'supplier_id' => 2, 'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')],
	        	['name' => 'babydoll trắng', 'price' => '210.000', 'like' => 900, 'discount' => $faker->numberBetween($min = 600, $max = 9000), 'description' => $faker->word, 'cate_id' => 1, 'supplier_id' => 3, 'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')],
	        	['name' => 'babydoll trắng', 'price' => '600.000', 'like' => 900, 'discount' => $faker->numberBetween($min = 600, $max = 9000), 'description' => $faker->word, 'cate_id' => 1, 'supplier_id' => 4, 'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')]
	        ]);
        }
        
    }
}
