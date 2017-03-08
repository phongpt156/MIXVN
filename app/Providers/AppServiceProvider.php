<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\BLL\Front\CategoryBLL;
use App\BLL\Front\FeatureDefaultValueBLL;
use App\BLL\Front\CollectionBLL;
use App\BLL\Front\ProductBLL;
use App\BLL\Front\ProductLikerBLL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        $header = ['front.home.index'];
        View::composer($header, function ($view) {
            if(Auth::check())
            {
                $user_id = Auth::id();
                $list_product_user_like = ProductLikerBLL::GetListProductUserLike($user_id);
            }
            $female_cate = CategoryBLL::GetFemaleCategories();
            $male_cate = CategoryBLL::GetMaleCategories();
            $color_default_values = FeatureDefaultValueBLL::GetFeatureDefaultValues(1);
            $material_default_values = FeatureDefaultValueBLL::GetFeatureDefaultValues(2);
            $pattern_default_values = FeatureDefaultValueBLL::GetFeatureDefaultValues(3);
            $collections = CollectionBLL::PaginateCollections(11);
            $data = compact('female_cate', 'male_cate', 'color_default_values', 'material_default_values', 'pattern_default_values', 'collections');
            if(isset($list_product_user_like)) 
            {
                $data['list_product_user_like'] = $list_product_user_like;
            }
            return $view->with($data);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
