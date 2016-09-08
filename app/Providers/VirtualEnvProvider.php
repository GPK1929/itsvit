<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\VirtualEnvironments\VirtualEnv;
use App\Http\Controllers\VirtualEnvironments\Proxmox;

class VirtualEnvProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VirtualEnv::class, Proxmox::class);
    }
}
