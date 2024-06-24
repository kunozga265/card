<?php

namespace App\Providers;

//use Illuminate\Pagination\Paginator;
use App\Models\PageGroup;
use Illuminate\Support\Facades\View;
use Schema;
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
        Schema::defaultStringLength(191);
//        Paginator::useBootstrap();

        $pages = PageGroup::all();
        View::share("pages",$pages);
    }
}
