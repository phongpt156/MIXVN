<?php

namespace App\DAL;
use App\Models\Category;
use App\Models\CateGenderXref;
use Illuminate\Support\Facades\DB;

class CategoryDAL
{
	public static function General() {
		$categories = DB::table('category as c')
						  ->join('cate_gender_xref as c_g_x', 'c.id', '=', 'c_g_x.cate_id');
		return $categories;
	}

	public static function GetFemaleCategories() {
		$female_categories = CategoryDAL::General()
								->where('c_g_x.gender_id', '=', 2)
								->select('c.id as id', 'c.name as name', 'c.description as des', 'c.sub_id as sub_id')
								->get();
		return $female_categories;
	}
	
	public static function GetMaleCategories() {
		$male_categories = CategoryDAL::General()
								->where('c_g_x.gender_id', '=', 1)
								->select('c.id as id', 'c.name as name', 'c.description as des', 'c.sub_id as sub_id')
								->get();
		return $male_categories;
	}
}
