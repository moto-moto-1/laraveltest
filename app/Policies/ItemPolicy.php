<?php

namespace App\Policies;

use App\User;
use App\item;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the item.
     *
     * @param  \App\User  $user
     * @param  \App\item  $item
     * @return mixed
     */
    public function view(User $user, item $item)
    {
        //
    }

    /**
     * Determine whether the user can create items.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the item.
     *
     * @param  \App\User  $user
     * @param  \App\item  $item
     * @return mixed
     */
    public function update(User $user, item $item)
    {
        //
    }

    /**
     * Determine whether the user can delete the item.
     *
     * @param  \App\User  $user
     * @param  \App\item  $item
     * @return mixed
     */
    public function delete(User $user, item $item)
    {
        //
    }
}
