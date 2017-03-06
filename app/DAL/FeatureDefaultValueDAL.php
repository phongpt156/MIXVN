<?php

namespace App\DAL;

use Illuminate\Support\Facades\DB;
use App\Models\Feature;
use App\Models\FeatureDefaultValue;

class FeatureDefaultValueDAL
{
	public static function General() {
		$values = DB::table('feature_default_value as f_d_v')
					->join('feature as f', 'f_d_v.feature_id', '=', 'f.id');
		return $values;
	}

	public static function GetFeatureDefaultValues($feature_id) {
		$values = FeatureDefaultValueDAL::General()
					->select('f_d_v.vn_value as vn_value', 'f_d_v.other_value as other_value')
					->where('f_d_v.feature_id', '=', $feature_id)
					->get();
		return $values;
	}
}
