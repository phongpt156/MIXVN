<?php

namespace App\DAL;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductImage;

class ProductDAL
{
	public static function ProductInstance()
	{
		$products = DB::table('product as p')
						->join('product_image as p_i', 'p.id', '=', 'p_i.product_id')
						->leftJoin('supplier as s', 'p.supplier_id', '=', 's.id')
						->select('p.name as p_name', 'p.price as p_price', 'p.discount as p_discount', 'p.like as p_like', 'p.buy as p_buy', 'p.follow as p_follow', 'p.supplier_id as supplier_id', 'p_i.name as p_i_name', 'p_i.alt as p_i_alt', 'p_i.description as p_i_des', 's.name as s_name');
		return $products;
	}

	public static function GetNewestProducts($number = 16)
	{
		$products = ProductDAL::ProductInstance()
								->orderBy('p.created_at', 'desc')
								->paginate($number);
		return $products->withPath('product/newest-product');
	}

	public static function GetMostLikeProducts($number = 16)
	{
		$products = ProductDAL::ProductInstance()
								->orderBy('p.like', 'desc')
								->paginate($number);
		return $products->withPath('product/mostlike-product');
	}

	public static function GetDiscountProducts($number = 16)
	{
		$products = ProductDAL::ProductInstance()
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
}
