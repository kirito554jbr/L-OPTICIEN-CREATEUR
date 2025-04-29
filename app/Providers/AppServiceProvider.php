<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
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
        $this->app->bind(
            'App\Repositories\Interfaces\ProduitInterface',
            'App\Repositories\ProduitRepo'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\CategorieInterface',
            'App\Repositories\CategorieRepo'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\RendezVousInterface',
            'App\Repositories\RendezVousRepo'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\RoleInterface',
            'App\Repositories\RoleRepo'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\UserInterface',
            'App\Repositories\UserRepo'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\OrderInterface',
            'App\Repositories\OrderRepo'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\StripeInterface',
            'App\Repositories\StripeRepo'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\AuthInterface',
            'App\Repositories\AuthRepo'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\Ordered_itemsInterface',
            'App\Repositories\Ordered_itemsRepo'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\PanierInterface',
            'App\Repositories\PanierRepo'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();  
    }
}
