<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\NotificationComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('id');
        
        View::composer('dashboard', NotificationComposer::class);
    }
}
