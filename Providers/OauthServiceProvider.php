<?php

namespace Gdevilbat\SpardaCMS\Modules\Oauth\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Laravel\Passport\Passport;

class OauthServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        //$this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        //Passport::routes();
        //Passport::personalAccessClientId('client-id');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('oauth.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'oauth'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/Modules/SpardaCMS/oauth');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/Modules/SpardaCMS/oauth';
        }, \Config::get('view.paths')), [$sourcePath]), 'oauth');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/Modules/SpardaCMS/oauth');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'oauth');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'oauth');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        // $this->app->runningInConsole()
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
