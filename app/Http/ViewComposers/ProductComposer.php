<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\BLL\Front\ProductLikerBLL;

class ProductComposer
{
    public function compose(View $view)
    {
        if(Auth::check())
        {
            $user_id = Auth::id();
            $list_product_user_like = ProductLikerBLL::GetListProductUserLike($user_id);
        }
        $view->with(compact('list_product_user_like'));
    }
}
