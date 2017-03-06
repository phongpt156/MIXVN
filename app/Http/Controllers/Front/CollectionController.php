<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BLL\Front\CollectionBLL;

class CollectionController extends Controller
{
    //
    public static function GetCollections()
    {
    	$collections = CollectionBLL::PaginateCollections();
    	return view('front.collection.list-collection', compact('collections'));
    }
}
