<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BLL\Front\ProductBLL;
use App\BLL\Front\ProductFeatureValueBLL;
use App\BLL\Front\CollectionProductXrefBLL;
use App\DAL\ProductDAL;

class ProductController extends Controller
{
    //
	public static function GetNewestProducts($number = 16)
	{
		$products = ProductBLL::GetNewestProducts($number);
		return view('front.product.homepage-product-list', compact('products'));
	}

	public static function GetMostLikeProducts($number = 16)
	{
		$products = ProductBLL::GetMostLikeProducts($number);
		return view('front.product.homepage-product-list', compact('products'));
	}

	public static function GetDiscountProducts($number = 16)
	{
		$products = ProductBLL::GetDiscountProducts($number);
		return view('front.product.homepage-product-list', compact('products'));
	}

	public static function GetTendencyProducts($number = 16)
	{
		$products = ProductBLL::GetTendencyProducts($number);
		return view('front.product.homepage-product-list', compact('products'));
	}

	public static function GetDetailProductInfo(Request $request)
	{
		$product_id = $request['product_id'] ?? null;
		$product_group_id = $request['product_group_id'] ?? null;
		if(!is_null($product_id) && !is_null($product_group_id))
		{
			$product = ProductBLL::GetOneProductInfo($product_id, $product_group_id);
			$product_feature_value = ProductFeatureValueBLL::GetProductFeatureValues($product_id);
			$feature_name = ProductFeatureValueBLL::GetFeatureName($product_id);
			$product_collection = CollectionProductXrefBLL::GetProductCollection($product_id);
			return view('front.product.detail-product-info-card', compact('product', 'product_feature_value', 'feature_name', 'product_collection'));
		}
	}
}
