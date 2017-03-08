<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BLL\Front\ProductBLL;

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
}
