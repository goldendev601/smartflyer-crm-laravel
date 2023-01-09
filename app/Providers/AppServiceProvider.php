<?php

namespace App\Providers;

use App\ModelsExtended\PersonalAccessToken;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Illuminate\Pagination\Paginator;

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
        Sanctum::ignoreMigrations();
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        URL::forceRootUrl(env('APP_URL'));
        Paginator::useBootstrap();
    }
}
