<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ProfilPerusahaan;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
    // Bagikan data profil ke navbar, footer, dan semua halaman front/*
    View::composer(['layouts.app', 'partials.navbar', 'partials.footer', 'front.*'], function ($view) {  
            $view->with('profil', ProfilPerusahaan::data());
        });
    }
}