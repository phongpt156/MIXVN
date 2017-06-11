<?php

namespace App\BLL\Front;

use App\DAL\ProductDAL;

class ProductBLL
{
	private $productDAL;

	function __construct()
	{
		$this->productDAL = new ProductDAL;
	}
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

	public static function GetOneProductInfo($product_id, $product_group_id)
	{
		return ProductDAL::GetOneProductInfo($product_id, $product_group_id);
	}

	public function searchProduct($feature_item, $cate_item, $color_item, $product_name)
	{
		$this->productDAL->searchProduct($feature_item, $cate_item, $color_item, $product_name);
	}

}
