<?php

namespace App\Policies;

use App\Models\People;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeoplePolicy
{
    use HandlesAuthorization;

    public function delete(User $user, People $listing){
        return $user->id === $listing->user_id;
    }
}
