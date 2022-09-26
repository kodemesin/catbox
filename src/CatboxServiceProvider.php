<?php

namespace Kodemesin\Catbox;

use Illuminate\Support\ServiceProvider;

class CatboxServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__."/views", "catbox");
    }

    public function register()
    {

    }
}
