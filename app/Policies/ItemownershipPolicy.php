<?php

namespace App\Policies;

use App\User;
use App\itemownership;
use Illuminate\Auth\Access\HandlesAuthorization;


class ItemownershipPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the itemownership.
     *
     * @param  \App\User  $user
     * @param  \App\itemownership  $itemownership
     * @return mixed
     */
    public function view(User $user, itemownership $itemownership)
    {
        //
    }

    /**
     * Determine whether the user can create itemownerships.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the itemownership.
     *
     * @param  \App\User  $user
     * @param  \App\itemownership  $itemownership
     * @return mixed
     */
    public function update(User $user, itemownership $itemownership)
    {
        //
    }

    /**
     * Determine whether the user can delete the itemownership.
     *
     * @param  \App\User  $user
     * @param  \App\itemownership  $itemownership
     * @return mixed
     */
    public function delete(User $user, itemownership $itemownership)
    {
        //
    }
}
