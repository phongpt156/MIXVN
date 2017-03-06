<?php

use Illuminate\Database\Seeder;

class CollectionImageTableSeeder extends Seeder
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
        DB::table('collection_image')->truncate();
        for($i = 0; $i < 50; $i ++) {
        	$collection_image = [
        		'name' =>$faker->imageUrl($width = 290, $height = 90),
        		'alt' => $faker->word,
        		'description' => $faker->realText($maxNbChars = 200, $indexSize = 1),
        		'collection_id' => DB::table('collection')->get()->random()->id
        	];
        	DB::table('collection_image')->insert($collection_image);
        }
    }
}
