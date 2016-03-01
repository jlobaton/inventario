<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['ordene.*',
                        'mail.*',
                        'inventario.*',
                        'layouts.principal',
                        'encomienda.*',
                        'banco.*',
                        'configuracion.*',
                        'migracion.*',
                        'usuarios.*',
                        'imagenes.*',
                        'graciaspago.*'
                        ], 'App\Http\ViewComposers\AsideComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
