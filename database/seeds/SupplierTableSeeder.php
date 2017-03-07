<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
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
        DB::table('supplier')->insert([
        	['name' => 'Nut Closet', 'address' => $faker->address],
        	['name' => 'Cloud Cuckoo', 'address' => $faker->address],
        	['name' => 'Tổ cú vintage', 'address' => $faker->address],
        	['name' => 'Magenta', 'address' => $faker->address]
       	]);
    }
}
