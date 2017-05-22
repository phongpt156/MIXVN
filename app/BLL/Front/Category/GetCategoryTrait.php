<?php

namespace App\BLL\Front\Category;

trait GetCategoryTrait
{
	private function GetCategoriesByGender(string $gender)
	{
		if($gender == 'male') $gender_id = 1;
		else $gender_id = 2;
		$query = clone self::$query;
		$female_categories = $query->where('c_g_x.gender_id', '=', $gender_id)
								   ->select('c.id as id', 'c.name as name', 'c.description as des', 'c.sub_id as sub_id');
		return $female_categories;
	}
}
