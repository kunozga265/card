<?php

namespace App\Providers;

//use Illuminate\Pagination\Paginator;
use App\Models\Page;
use App\Models\PageGroup;
use Illuminate\Support\Facades\View;
use Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private $OPERATING_HOURS = 26;
    private $PHONE_NUMBER = 27;
    private $ADDRESS = 28;
    private $EMAIL = 29;
    private $FACEBOOK = 30;
    private $TWITTER = 31;
    private $YOUTUBE = 32;
    private $LINKEDIN = 33;

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
        $operating_hours = Page::find($this->OPERATING_HOURS);
        $phone_number = Page::find($this->PHONE_NUMBER);
        $address = Page::find($this->ADDRESS);
        $email = Page::find($this->EMAIL);
        $facebook = Page::find($this->FACEBOOK);
        $twitter = Page::find($this->TWITTER);
        $youtube = Page::find($this->YOUTUBE);
        $linkedin = Page::find($this->LINKEDIN);

        View::share("pages",$pages);
        View::share("operating_hours",$operating_hours);
        View::share("phone_number",$phone_number);
        View::share("address",$address);
        View::share("email",$email);
        View::share("facebook",$facebook);
        View::share("twitter",$twitter);
        View::share("youtube",$youtube);
        View::share("linkedin",$linkedin);
    }
}
