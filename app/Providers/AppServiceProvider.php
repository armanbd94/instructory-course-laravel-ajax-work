<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\DemoContract;
use App\Repositories\DemoRepository;
class AppServiceProvider extends ServiceProvider
{
    protected $repositories = [
        DemoContract::class => DemoRepository::class
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface,$implementation);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
