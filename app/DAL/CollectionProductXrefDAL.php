<?php

namespace App\DAL;

use App\Models\CollectionProductXref;
use Illuminate\Support\Facades\DB;

class CollectionProductXrefDAL
{
	public static function GetProductCollection($product_id)
	{
		$collections = DB::table('collection_product_xref as c_p_x')
							->join('collection as c', 'c.id', '=', 'c_p_x.collection_id')
							->where('c_p_x.product_id', '=', $product_id)
							->select('c.name as c_name')
							->first();
		return $collections;
	}
}
