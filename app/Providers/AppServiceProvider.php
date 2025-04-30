<?php

namespace App\Providers;

use App\Repositories\Interfaces\UserInterface;
use App\Repositories\UserRepository;
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
            'App\Repositories\ProduitRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\CategorieInterface',
            'App\Repositories\CategorieRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\RendezVousInterface',
            'App\Repositories\RendezVousRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\RoleInterface',
            'App\Repositories\RoleRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\UserInterface',
            'App\Repositories\UserRepository'
        );
       
        $this->app->bind(
            'App\Repositories\Interfaces\ordersInterface',
            'App\Repositories\OrdersRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\StripeInterface',
            'App\Repositories\StripeRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\AuthInterface',
            'App\Repositories\AuthRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\OrderedItemsInterface',
            'App\Repositories\OrderedItemsRepository'
        );
        $this->app->bind(
            'App\Repositories\Interfaces\PanierInterface',
            'App\Repositories\PanierRepository'
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
