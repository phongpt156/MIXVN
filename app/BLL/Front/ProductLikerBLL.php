<?php

namespace App\BLL\Front;

use App\DAL\ProductLikerDAL;

class ProductLikerBLL
{
	public static function GetListProductUserLike($user_id = null)
	{
		return ProductLikerDAL::GetListProductUserLike($user_id);
	}

	public static function LikeProduct($product_id, $user_id)
	{
		return ProductLikerDAL::LikeProduct($product_id, $user_id);
	}
}
