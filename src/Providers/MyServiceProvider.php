<?php namespace MyNamespace\MyPackageName;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class ForumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        $this->publishes(
            [
                __DIR__ . '/../config/my-package-config.php' => config_path('my-package-config.php'),
            ]
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}