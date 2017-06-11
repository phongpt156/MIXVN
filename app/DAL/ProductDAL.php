<?php

namespace App\DAL;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductImage;

class ProductDAL
{
	public static function ProductInstance()
	{
		$products = DB::table('product_group_product_xref as pg_p_x')
						->join('product as p', 'pg_p_x.product_id', '=', 'p.id')
						->join('product_group as pg', 'pg_p_x.product_group_id', '=', 'pg.id')
						->join('product_group_image as pg_i', 'pg.id', '=', 'pg_i.product_group_id')
						->leftJoin('supplier as s', 'p.supplier_id', '=', 's.id')
						->select('p.id as p_id', 'p.name as p_name', 'p.price as p_price', 'p.discount as p_discount', 'p.like as p_like', 'p.buy as p_buy', 'p.follow as p_follow', 'p.supplier_id as supplier_id', 'pg_i.name as pg_i_name', 'pg_i.alt as pg_i_alt', 'pg_i.description as pg_i_des', 's.name as s_name', 'pg.id as pg_id');
		return $products;
	}

	public static function getProductGroupQuery()
	{
		$query = ProductDAL::ProductInstance()
							->join(
								DB::raw('
									(
										SELECT product_group_id, MAX(num_search) as num_search
										FROM product_group_product_xref
										GROUP BY product_group_id
									) pg_p_x2
								'),
								function ($join) {
									$join->on('pg_p_x.product_group_id', '=', 'pg_p_x2.product_group_id')
										 ->on('pg_p_x.num_search', '=', 'pg_p_x2.num_search');
								}
							);
		return $query;
	}

	public static function GetNewestProducts($number = 16)
	{
		$products = ProductDAL::getProductGroupQuery()
								->orderBy('p.created_at', 'desc')
								->paginate($number);
		return $products->withPath('product/newest-product');
	}

	public static function GetMostLikeProducts($number = 16)
	{
		$products = ProductDAL::getProductGroupQuery()
								->orderBy('p.like', 'desc')
								->paginate($number);
		return $products->withPath('product/mostlike-product');
	}

	public static function GetDiscountProducts($number = 16)
	{
		$products = ProductDAL::getProductGroupQuery()
								->orderBy('p.discount', 'desc')
								->paginate($number);
		return $products->withPath('product/discount-product');
	}

	public static function GetTendencyProducts($number = 16)
	{
		$products = ProductDAL::ProductInstance()
								->orderBy('p.buy', 'desc')
								->paginate($number);
		return $products->withPath('product/tendency-product');
	}

	public static function GetLikeNumberOfProduct($product_id)
	{
		$like_number = DB::table('product')
						->where([
							['id', '=', $product_id]
						])
						->pluck('like')
						->first();
		return $like_number;
	}
	public static function UpdateLikeNumber($product_id, $action)
	{
		$like_number = ProductDAL::GetLikeNumberOfProduct($product_id);
		if($action === 'add')
		{
			++$like_number;
		}
		else
		{
			--$like_number;
		}
		DB::table('product')
			->where('id', '=', $product_id)
			->update(['like' => $like_number]);
		return $like_number;
	}

	public static function GetOneProductInfo($product_id, $product_group_id) 
	{
		$product = ProductDAL::ProductInstance()
								->addSelect('s.address as s_address' )
								->where([
									['p.id', '=', $product_id],
									['pg.id', '=', $product_group_id]
								])
								->first();
		return $product;
	}

	public function searchProduct($feature_item, $cate_item, $color_item, $product_name)
	{
		$query = ProductDAL::ProductInstance();

		if (!empty($product_name)) {
			$query = $query->where('p.name', 'LIKE', '%' . $product_name . '%');
		}

		if (!empty($feature_item) || !empty($color_item)) {
			$query = $query->join('product_feature_value as p_f_v', function ($join) use ($feature_item, $color_item) {
				$join = $join->on('p_f_v.product_id', '=', 'p.id');
				$count = 0;
				if (!empty($feature_item)) {
					$join = $join->where(function ($query) use ($feature_item, &$count) {
						foreach ($feature_item as $feature) {
							if ($count === 0) {
								$query = $query->where('p_f_v.vn_value', $feature);
							} else {
								$query = $query->orWhere('p_f_v.vn_value', $feature);
							}
							$count++;
						}
					});
				}
				if (!empty($color_item)) {
					$join = $join->where(function ($query) use ($color_item, &$count) {
						foreach ($color_item as $color) {
							if ($count === 0) {
								$query = $query->where('p_f_v.vn_value', $color);
							} else {
								$query = $query->orWhere('p_f_v.vn_value', $color);
							}
							$count++;
						}
					});
				}		
			});
		}
		if (!empty($cate_item)) {
			$query = $query->join('category as c', 'p.cate_id', '=', 'c.id')
						   ->where('c.name', '=', $cate_item);
		}

		$products = $query->groupBy('p.id')->get();
	}
}
