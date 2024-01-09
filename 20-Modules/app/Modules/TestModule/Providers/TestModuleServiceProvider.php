<?php

namespace App\Modules\TestModule\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class TestModuleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // rotaları sisteme tanımlıyoruz.
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // views dosyalarını tanımlıyoruz.
        $this->loadViewsFrom(__DIR__ . '/../views', 'TestModule');

        // migrations dosyalarını tanımlıyoruz.
        $this->loadMigrationsFrom(__DIR__ . '/../Migrations');
    }
}
