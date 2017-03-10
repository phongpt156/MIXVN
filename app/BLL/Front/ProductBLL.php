<?php

namespace App\BLL\Front;

use App\DAL\ProductDAL;

class ProductBLL
{
	public static function GetNewestProducts($number = 16)
	{
		return ProductDAL::GetNewestProducts($number);
	}

	public static function GetMostLikeProducts($number = 16)
	{
		return ProductDAL::GetMostLikeProducts($number);
	}

	public static function GetTendencyProducts($number = 16)
	{
		return ProductDAL::GetTendencyProducts($number);
	}

	public static function GetDiscountProducts($number = 16)
	{
		return ProductDAL::GetDiscountProducts($number);
	}

	public static function UpdateLikeNumber($product_id, $action)
	{
		return ProductDAL::UpdateLikeNumber($product_id, $action);
	}
}
