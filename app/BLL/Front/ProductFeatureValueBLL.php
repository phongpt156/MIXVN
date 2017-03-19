<?php

namespace App\BLL\Front;

use App\DAL\ProductFeatureValueDAL;

class ProductFeatureValueBLL
{
	public static function GetProductFeatureValues($product_id)
	{
		return ProductFeatureValueDAL::GetProductFeatureValues($product_id);
	}

	public static function GetFeatureName($product_id)
	{
		return ProductFeatureValueDAL::GetFeatureName($product_id);
	}
}
