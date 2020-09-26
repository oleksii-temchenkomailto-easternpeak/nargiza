<?php

namespace App\Providers;

use App\Events\OrderCreate;
use App\Events\OrderCreated;
use App\Listeners\OrderCreatedListener;
use App\Listeners\OrderCreateListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class OrderProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        OrderCreate::class => [
            OrderCreateListener::class,
        ],
        OrderCreated::class => [
            OrderCreatedListener::class,
        ],
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        dd(__FILE__ . ':' . __LINE__);///@TODO Don't forget to remove.
        //
    }

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
