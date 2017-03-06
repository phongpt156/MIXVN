<?php

use Illuminate\Database\Seeder;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('feature')->insert([
        	['name' => 'Màu sắc'],
        	['name' => 'Chất liệu'],
        	['name' => 'Họa tiết']
        ]);
    }
}
