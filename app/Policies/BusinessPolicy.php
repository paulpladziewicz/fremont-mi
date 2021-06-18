<?php

namespace App\Policies;

use App\Models\Business;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BusinessPolicy
{
    use HandlesAuthorization;

    public function edit(User $user, Business $listing){
        return $user->id === $listing->user_id;
    }

    public function delete(User $user, Business $listing){
        return $user->id === $listing->user_id;
    }
}
