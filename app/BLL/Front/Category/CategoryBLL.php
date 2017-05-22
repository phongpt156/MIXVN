<?php

namespace App\BLL\Front\Category;

use App\DAL\CategoryDAL;

class CategoryBLL
{

	private static $categoryDAL;

	function __construct()
	{
		self::$categoryDAL = new CateGoryDAL;
	}

	function GetCategoriesByGender(string $gender)
	{
		return self::$categoryDAL->GetCategoriesByGender($gender);
	}
}
