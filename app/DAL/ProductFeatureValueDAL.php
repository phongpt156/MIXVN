<?php

namespace App\DAL;

use App\Models\ProductFeatureValue;
use App\Models\Feature;
use Illuminate\Support\Facades\DB;

class ProductFeatureValueDAL
{
	public static function GetProductFeatureValues($product_id)
	{
		$product_feature_value = DB::table('product_feature_value as p_f_v')
			->join('feature as f', 'f.id', '=', 'p_f_v.feature_id')
			->where('p_f_v.product_id', '=', $product_id)
			->select('f.id as f_id', 'p_f_v.vn_value as p_f_v_vn_value', 'p_f_v.other_value as p_f_v_other_value')
			->get();
		return $product_feature_value;
	}

	public static function GetFeatureName($product_id)
	{
		$feature_name = DB::table('product_feature_value as p_f_v')
							->join('feature as f', 'f.id', '=', 'p_f_v.feature_id')
							->where('p_f_v.product_id', '=', $product_id)
							->select('f.id as f_id', 'f.name as f_name')
							->groupBy('f_id', 'f_name')
							->get();
		return $feature_name;
	}
}
