<?php

namespace App\DAL;

use App\Models\ProductLiker;
use Illuminate\Support\Facades\DB;

class ProductLikerDAL
{
	public static function GetListProductUserLike($user_id = null)
	{
		$list_product = DB::table('product_liker as p_l')
							->where('p_l.user_id', '=', $user_id)
							->pluck('p_l.product_id');
		return $list_product->toArray();
	}
}
