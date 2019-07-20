<?php

namespace App\Policies;

use App\User;
use App\task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the task.
     *
     * @param  \App\User  $user
     * @param  \App\task  $task
     * @return mixed
     */
    public function view(User $user, task $task)
    {
        //
    }

    /**
     * Determine whether the user can create tasks.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
     
       return Auth::user() == $user;
        //
    }

    /**
     * Determine whether the user can update the task.
     *
     * @param  \App\User  $user
     * @param  \App\task  $task
     * @return mixed
     */
    public function update(User $user, task $task)
    {
        //
    }

    /**
     * Determine whether the user can delete the task.
     *
     * @param  \App\User  $user
     * @param  \App\task  $task
     * @return mixed
     */
    public function delete(User $user, task $task)
    {
        //
    }
}
