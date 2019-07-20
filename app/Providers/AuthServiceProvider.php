<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Http\Request;

use App\item;
use App\itemownership;
use App\membership;
use App\task;
use App\taskownership;
use App\team;
use App\User;

use App\Policies\ItemPolicy;
use App\Policies\ItemownershipPolicy;
use App\Policies\MembershipPolicy;
use App\Policies\TaskPolicy;
use App\Policies\TaskownershipPolicy;
use App\Policies\TeamPolicy;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        item::class => ItemPolicy::class,
        itemownership::class => ItemownershipPolicy::class,
        membership::class => MembershipPolicy::class,
        task::class => TaskPolicy::class,
        taskownership::class => TaskownershipPolicy::class,
        team::class => TeamPolicy::class,
        User::class => UserPolicy::class,


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
