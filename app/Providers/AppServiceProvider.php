<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('name','KPT'); //all

        View::composer(['name-view','pages.product'],function($view){
            $giatri = ['php', 'iOS','Android'];
            $view->with('var',$giatri);
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
