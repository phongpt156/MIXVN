<?php

use Illuminate\Database\Seeder;

class FeatureDefaultValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('feature_default_value')->insert([
       		[
       			'vn_value' => 'Đen',
       			'other_value' => '#000000',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Trắng',
       			'other_value' => '#ffffff',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Đỏ',
       			'other_value' => '#e22c2a',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Cam',
       			'other_value' => '#f2ab46',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Vàng',
       			'other_value' => '#e9e455',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Xanh lục',
       			'other_value' => '#4ab87f',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Xanh lam',
       			'other_value' => '#52b3d9',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Ghi',
       			'other_value' => '#7a7b7c',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Tím',
       			'other_value' => '#854b95',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Nâu',
       			'other_value' => '#482b21',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Hồng',
       			'other_value' => '#da94b9',
       			'feature_id' => 1
       		],
       		[
       			'vn_value' => 'Coton',
       			'other_value' => '',
       			'feature_id' => 2
       		],
       		[
       			'vn_value' => 'Da bóng',
       			'other_value' => '',
       			'feature_id' => 2
       		],
       		[
       			'vn_value' => 'Da lộn',
       			'other_value' => '',
       			'feature_id' => 2
       		],
       		[
       			'vn_value' => 'Kaki',
       			'other_value' => '',
       			'feature_id' => 2
       		],
       		[
       			'vn_value' => 'Len',
       			'other_value' => '',
       			'feature_id' => 2
       		],
       		[
       			'vn_value' => 'Lụa',
       			'other_value' => '',
       			'feature_id' => 2
       		],
       		[
       			'vn_value' => 'Vải lanh',
       			'other_value' => '',
       			'feature_id' => 2
       		],
       		[
       			'vn_value' => 'Sợi tổng hợp',
       			'other_value' => '',
       			'feature_id' => 2
       		],
       		[
       			'vn_value' => 'Nỉ',
       			'other_value' => '',
       			'feature_id' => 2
       		],
       		[
       			'vn_value' => 'caro',
       			'other_value' => '',
       			'feature_id' => 3
       		],
       		[
       			'vn_value' => 'kẻ sọc',
       			'other_value' => '',
       			'feature_id' => 3
       		],
       		[
       			'vn_value' => 'chấm bi',
       			'other_value' => '',
       			'feature_id' => 3
       		],
       		[
       			'vn_value' => 'hình lớn',
       			'other_value' => '',
       			'feature_id' => 3
       		],
       		[
       			'vn_value' => 'trơn',
       			'other_value' => '',
       			'feature_id' => 3
       		],
       		[
       			'vn_value' => 'khác',
       			'other_value' => '',
       			'feature_id' => 3
       		]
        ]);
    }
}
