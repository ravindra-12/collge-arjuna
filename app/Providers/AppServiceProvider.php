<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Import the correct View facade
use Illuminate\Pagination\Paginator; // Import the Paginator class
use App\Models\Post;
use App\Http\ViewComposers\SidebarComposer;

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
        // Use Bootstrap for pagination
        Paginator::useBootstrap(); // For Bootstrap 4 or 5

        // Share recent posts with all views
        View::composer('*', function ($view) {
            $view->with('recentPosts', Post::latest()->take(3)->get());
        });

        View::composer(
            'collegelayout', // The layout name where the sidebar is included
            SidebarComposer::class
        );
    }
}
