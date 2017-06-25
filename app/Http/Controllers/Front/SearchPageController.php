<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BLL\Front\ProductBLL;
use Illuminate\Cookie\CookieJar;
use Illuminate\Cookie;

class SearchPageController extends Controller
{
    //

    public function index(CookieJar $cookieJar, Request $request)
    {
    	$feature_item = $request['feature-item'] ?? null;
    	$cate_item = $request['cate-item'] ?? null;
    	$color_item = $request['color-item'] ?? null;
    	$product_name = $request['product-name'] ?? null;

    	$productBLL = new ProductBLL;
    	$productBLL->searchProduct($feature_item, $cate_item, $color_item, $product_name);
        if (empty($product_name)) $product_name = 'Váy đỏ dáng xuông'; 
        return view('front.home.search-page', compact('product_name'));
    }
}
