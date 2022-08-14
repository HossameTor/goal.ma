<?php

namespace App\Providers;

use TCG\Voyager\Facades\Voyager;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Voyager::useModel('Post', \App\Post::class);
        Voyager::useModel('Category', \App\Category::class);
        Paginator::useBootstrap();
    }
}
