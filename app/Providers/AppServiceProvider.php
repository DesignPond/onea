<?php

namespace App\Providers;

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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUserService();
        $this->registerPageService();
    }

    /**
     * User
     */
    protected function registerUserService(){

        $this->app->singleton('App\Onea\User\Repo\UserInterface', function()
        {
            return new \App\Onea\User\Repo\UserEloquent(new \App\Onea\User\Entities\User);
        });
    }

    /**
     * Page
     */
    protected function registerPageService(){

        $this->app->singleton('App\Onea\Page\Repo\PageInterface', function()
        {
            return new \App\Onea\Page\Repo\PageEloquent(new \App\Onea\Page\Entities\Page);
        });

    }

}
