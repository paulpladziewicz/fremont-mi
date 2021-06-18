<?php

namespace App\Providers;

use App\Models\Business;
use App\Models\Event;
use App\Models\People;
use App\Policies\BusinessPolicy;
use App\Policies\EventPolicy;
use App\Policies\PeoplePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Event::class => EventPolicy::class,
        People::class => PeoplePolicy::class,
        Business::class => BusinessPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
