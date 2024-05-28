<?php

namespace modules\Rayiumir\Admin\Provider;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/admin_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Admin');
    }

    public function boot(): void
    {
        //
    }
}
