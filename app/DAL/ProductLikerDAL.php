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

	public static function CheckExistProductLiker($product_id, $user_id)
	{
		return DB::table('product_liker as p_l')
				->where([
					['p_l.product_id', '=', $product_id],
					['p_l.user_id', '=', $user_id]
				])
				->count();
	}

	public static function RemoveProductLiker($product_id, $user_id)
	{
		return DB::table('product_liker')
			->where([
				['product_id', '=', $product_id],
				['user_id', '=', $user_id]
			])
			->delete();
	}

	public static function AddProductLiker($product_id, $user_id)
	{
		return DB::table('product_liker')
			->insert(['product_id' => $product_id, 'user_id' => $user_id]);
	}

	public static function LikeProduct($product_id, $user_id)
	{
		if(ProductLikerDAL::CheckExistProductLiker($product_id, $user_id))
		{
			ProductLikerDAL::RemoveProductLiker($product_id, $user_id);
			return 0;
		}
		ProductLikerDAL::AddProductLiker($product_id, $user_id);
		return 1;
	}
}
