<?php

namespace App\DAL;

use App\Models\Collection;
use App\Models\CollectionImage;
use Illuminate\Support\Facades\DB;

class CollectionDAL
{
	public static function QueryCollections()
	{
		$collections = DB::table('collection as c')
						->join('collection_image as c_i', 'c.id', '=', 'c_i.collection_id')
						->select('c.name as col_name', 'c_i.name as col_i_name', 'c_i.alt as col_i_alt', 'c_i.description as col_i_des');
		return $collections;
	}

	public static function PaginateCollections($number = 11)
	{
		$collections = CollectionDAL::QueryCollections()->orderBy('c.created_at', 'desc')->paginate($number);
		return $collections->withPath('collection/all');
	}
}
