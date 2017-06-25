<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\BLL\Front\Category\CategoryBLL;
use App\BLL\Front\FeatureDefaultValueBLL;
use App\BLL\Front\CollectionBLL;
use App\BLL\Front\ProductBLL;
use App\Http\ViewComposers\ProductComposer;

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
        $header = ['front.home.index', 'front.home.search-page'];
        View::composer($header, function ($view) {
            $categoryBLL = new CategoryBLL;
            $female_cate = $categoryBLL->GetCategoriesByGender('female');
            $male_cate = $categoryBLL->GetCategoriesByGender('male');
            $color_default_values = FeatureDefaultValueBLL::GetFeatureDefaultValues(1);
            $material_default_values = FeatureDefaultValueBLL::GetFeatureDefaultValues(2);
            $pattern_default_values = FeatureDefaultValueBLL::GetFeatureDefaultValues(3);
            $collections = CollectionBLL::PaginateCollections(11);
            $data = compact('female_cate', 'male_cate', 'color_default_values', 'material_default_values', 'pattern_default_values', 'collections');
            return $view->with($data);
        });

        $header = ['front.home.index', 'front.product.homepage-product-list'];
        View::composer(
            $header, 'App\\Http\\ViewComposers\\ProductComposer'
        );
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
