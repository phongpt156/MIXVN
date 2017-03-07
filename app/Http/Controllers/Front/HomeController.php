<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BLL\Front\ProductBLL;

class HomeController extends Controller
{
    //
    public static function Index()
    {
    	$products = ProductBLL::GetNewestProducts();
    	return view('front.home.index', compact('products'));
    }
}
