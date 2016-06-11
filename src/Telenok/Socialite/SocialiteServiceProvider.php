<?php

namespace Telenok\Socialite;

use Illuminate\Support\ServiceProvider;

class SocialiteServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

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

        $this->publishes([realpath(__DIR__ . '/../../../resources/app') => app_path()], 'resourcesapp');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Telenok\Socialite\Contracts\Factory'];
    }
}
