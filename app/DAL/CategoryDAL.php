<?php

namespace App\DAL;
use App\Models\Category;
use App\Models\CateGenderXref;
use Illuminate\Support\Facades\DB;
use App\Helper\AddGetQuery;
use App\BLL\Front\Category\GetCategoryTrait;

class CategoryDAL
{

	use GetCategoryTrait;

	private static $query;

	function __construct()
	{
		self::$query = DB::table('category as c')->join('cate_gender_xref as c_g_x', 'c.id', '=', 'c_g_x.cate_id');
	}

	function __call($method, $argument)
	{
		if(method_exists($this, $method))
		{
			$addGetQuery = new AddGetQuery($this->$method($argument[0]));
			return $addGetQuery->GetQuery();
		}
	}

}
