<?php

namespace App\BLL\Front;

use App\DAL\CollectionProductXrefDAL;

class CollectionProductXrefBLL
{
	public static function GetProductCollections($product_id)
	{
		return CollectionProductXrefDAL::GetProductCollections($product_id);
	}
}
