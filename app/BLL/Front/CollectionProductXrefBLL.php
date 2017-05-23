<?php

namespace App\BLL\Front;

use App\DAL\CollectionProductXrefDAL;

class CollectionProductXrefBLL
{
	public static function GetProductCollection($product_id)
	{
		return CollectionProductXrefDAL::GetProductCollection($product_id);
	}
}
