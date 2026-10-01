<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Galeri;
use App\Models\Pengumuman;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Bagikan data Galeri dan Pengumuman ke semua Blade
        View::composer('*', function ($view) {
            $view->with('galeri', Galeri::latest()->get());
            $view->with('pengumuman', Pengumuman::latest()->get());
        });
    }
}