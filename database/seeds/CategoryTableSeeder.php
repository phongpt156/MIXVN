<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
        	[
        		'name' => 'top',
        		'description' => str_random(10),
        		'sub_id' => 0
        	],
        	[
        		'name' => 'bottom',
        		'description' => str_random(10),
        		'sub_id' => 0
        	],
        	[
        		'name' => 'áo khoác',
        		'description' => str_random(10),
        		'sub_id' => 0
        	],
        	[
        		'name' => 'đầm',
        		'description' => str_random(10),
        		'sub_id' => 0
        	],
        	[
        		'name' => 'giày',
        		'description' => str_random(10),
        		'sub_id' => 0
        	],
        	[
        		'name' => 'phụ kiện',
        		'description' => str_random(10),
        		'sub_id' => 0
        	],
        	[
        		'name' => 'túi xách & ví',
        		'description' => str_random(10),
        		'sub_id' => 0
        	],
        	[
        		'name' => 'bo',
        		'description' => str_random(10),
        		'sub_id' => 0
        	],
        	[
        		'name' => 'ví & túi',
        		'description' => str_random(10),
        		'sub_id' => 0
        	],
        	[
        		'name' => 'áo phông',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'áo sơ mi',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'áo tanktop',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'áo croptop',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'áo kiểu',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'áo hở vai',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'áo sweater',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'áo len',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'áo polo',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'áo 3 lỗ',
        		'description' => str_random(10),
        		'sub_id' => 1
        	],
        	[
        		'name' => 'quần dài',
        		'description' => str_random(10),
        		'sub_id' => 2
        	],
        	[
        		'name' => 'quần sort',
        		'description' => str_random(10),
        		'sub_id' => 2
        	],
        	[
        		'name' => 'legging',
        		'description' => str_random(10),
        		'sub_id' => 2
        	],
        	[
        		'name' => 'quần nỉ',
        		'description' => str_random(10),
        		'sub_id' => 2
        	],
        	[
        		'name' => 'chân váy',
        		'description' => str_random(10),
        		'sub_id' => 2
        	],
        	[
        		'name' => 'quần âu',
        		'description' => str_random(10),
        		'sub_id' => 2
        	],
        	[
        		'name' => 'quần jean',
        		'description' => str_random(10),
        		'sub_id' => 2
        	],
        	[
        		'name' => 'áo denim',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'áo hoodies',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'áo dạ',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'áo cardigan',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'áo phao',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'áo khoác khác',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'áo vest',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'áo da',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'áo măngto/ áo dạ',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'ghile',
        		'description' => str_random(10),
        		'sub_id' => 3
        	],
        	[
        		'name' => 'đầm xuông',
        		'description' => str_random(10),
        		'sub_id' => 4
        	],
        	[
        		'name' => 'đầm xòe',
        		'description' => str_random(10),
        		'sub_id' => 4
        	],
        	[
        		'name' => 'đầm cut',
        		'description' => str_random(10),
        		'sub_id' => 4
        	],
        	[
        		'name' => 'đầm midi',
        		'description' => str_random(10),
        		'sub_id' => 4
        	],
        	[
        		'name' => 'đầm maxi',
        		'description' => str_random(10),
        		'sub_id' => 4
        	],
        	[
        		'name' => 'comple',
        		'description' => str_random(10),
        		'sub_id' => 8
        	],
        	[
        		'name' => 'suit',
        		'description' => str_random(10),
        		'sub_id' => 8
        	],
        	[
        		'name' => 'giày thể thao',
        		'description' => str_random(10),
        		'sub_id' => 5
        	],
        	[
        		'name' => 'boot',
        		'description' => str_random(10),
        		'sub_id' => 5
        	],
        	[
        		'name' => 'giày sneaker',
        		'description' => str_random(10),
        		'sub_id' => 5
        	],
        	[
        		'name' => 'giày slip-ons',
        		'description' => str_random(10),
        		'sub_id' => 5
        	],
        	[
        		'name' => 'giày cao gót',
        		'description' => str_random(10),
        		'sub_id' => 5
        	],
        	[
        		'name' => 'dép xăng đan',
        		'description' => str_random(10),
        		'sub_id' => 5
        	],
        	[
        		'name' => 'giày tây',
        		'description' => str_random(10),
        		'sub_id' => 5
        	],
        	[
        		'name' => 'giày lười',
        		'description' => str_random(10),
        		'sub_id' => 5
        	],
        	[
        		'name' => 'thắt lưng',
        		'description' => str_random(10),
        		'sub_id' => 6
        	],
        	[
        		'name' => 'kính mắt',
        		'description' => str_random(10),
        		'sub_id' => 6
        	],
        	[
        		'name' => 'mũ',
        		'description' => str_random(10),
        		'sub_id' => 6
        	],
        	[
        		'name' => 'khăn',
        		'description' => str_random(10),
        		'sub_id' => 6
        	],
        	[
        		'name' => 'tất',
        		'description' => str_random(10),
        		'sub_id' => 6
        	],
        	[
        		'name' => 'đồng hồ',
        		'description' => str_random(10),
        		'sub_id' => 6
        	],
        	[
        		'name' => 'thắt lưng',
        		'description' => str_random(10),
        		'sub_id' => 6
        	],
        	[
        		'name' => 'clutches',
        		'description' => str_random(10),
        		'sub_id' => 7
        	],
        	[
        		'name' => 'túi đeo vai',
        		'description' => str_random(10),
        		'sub_id' => 7
        	],
        	[
        		'name' => 'ví tiền',
        		'description' => str_random(10),
        		'sub_id' => 7
        	],
        	[
        		'name' => 'balo',
        		'description' => str_random(10),
        		'sub_id' => 7
        	],
        	[
        		'name' => 'túi đeo chéo',
        		'description' => str_random(10),
        		'sub_id' => 9
        	],
        	[
        		'name' => 'cặp xách tay',
        		'description' => str_random(10),
        		'sub_id' => 9
        	],
        	[
        		'name' => 'vali',
        		'description' => str_random(10),
        		'sub_id' => 9
        	]
        ]);
    }
}
