<?php

namespace App\Policies;

use App\User;
use App\membership;
use Illuminate\Auth\Access\HandlesAuthorization;

class MembershipPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the membership.
     *
     * @param  \App\User  $user
     * @param  \App\membership  $membership
     * @return mixed
     */
    public function view(User $user, membership $membership)
    {
        //
    }

    /**
     * Determine whether the user can create memberships.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the membership.
     *
     * @param  \App\User  $user
     * @param  \App\membership  $membership
     * @return mixed
     */
    public function update(User $user, membership $membership)
    {
        //
    }

    /**
     * Determine whether the user can delete the membership.
     *
     * @param  \App\User  $user
     * @param  \App\membership  $membership
     * @return mixed
     */
    public function delete(User $user, membership $membership)
    {
        //
    }
}
