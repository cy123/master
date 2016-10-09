<?php

namespace App\Providers;

use DB;
use App\Model\Tags;
use App\Model\ArticleCategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $tags=Tags::getTags();
        $categories = (new ArticleCategory)->getCategory();
        //dd($categories);
        view()->share([
            'tags'=>$tags,
            'categories'=>$categories
        ]);
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
