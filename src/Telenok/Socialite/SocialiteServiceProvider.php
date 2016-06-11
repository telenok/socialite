<?php

namespace Telenok\Socialite;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class SocialiteServiceProvider extends ServiceProvider
{
    public function __construct(Application $app)
    {
        parent::__construct($app);

        include __DIR__ . '/../../config/event.php';
    }

    /**
     * @method boot
     * Load config, routers, create singletons and others.
     * @return {void}
     * @member Telenok.Socialite.CoreServiceProvider
     */
    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__ . '/../../view'), 'socialite');
        $this->loadTranslationsFrom(realpath(__DIR__ . '/../../lang'), 'socialite');
        $this->publishes([realpath(__DIR__ . '/../../../resources/app') => app_path()], 'resourcesapp');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Telenok\Socialite\Contracts\Factory', function ($app) {
            return new \App\Telenok\Socialite\SocialiteManager($app);
        });
    }
}
