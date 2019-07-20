<?php

namespace App\Policies;

use App\User;
use App\taskownership;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskownershipPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the taskownership.
     *
     * @param  \App\User  $user
     * @param  \App\taskownership  $taskownership
     * @return mixed
     */
    public function view(User $user, taskownership $taskownership)
    {
        //
    }

    /**
     * Determine whether the user can create taskownerships.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the taskownership.
     *
     * @param  \App\User  $user
     * @param  \App\taskownership  $taskownership
     * @return mixed
     */
    public function update(User $user, taskownership $taskownership)
    {
        //
    }

    /**
     * Determine whether the user can delete the taskownership.
     *
     * @param  \App\User  $user
     * @param  \App\taskownership  $taskownership
     * @return mixed
     */
    public function delete(User $user, taskownership $taskownership)
    {
        //
    }
}
