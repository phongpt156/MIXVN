<?php

namespace App\BLL\Front;

use App\DAL\ProductLikerDAL;

class ProductLikerBLL
{
	public static function GetListProductUserLike($user_id = null)
	{
		return ProductLikerDAL::GetListProductUserLike($user_id);
	}
}
