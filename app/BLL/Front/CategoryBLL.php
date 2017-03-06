<?php

namespace App\BLL\Front;
use App\DAL\CategoryDAL;

class CategoryBLL
{
	public static function GetFemaleCategories() {
		return CategoryDAL::GetFemaleCategories();
	}

	public static function GetMaleCategories() {
		return CategoryDAL::GetMaleCategories();
	}
}
