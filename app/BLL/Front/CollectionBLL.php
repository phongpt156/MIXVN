<?php

namespace App\BLL\Front;

use App\DAL\CollectionDAL;

class CollectionBLL
{
	public static function PaginateCollections($number = 11)
	{
		return CollectionDAL::PaginateCollections($number);
	}
}
