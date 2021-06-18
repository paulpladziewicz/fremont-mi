<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
{
    use HandlesAuthorization;

    public function edit(User $user, Event $listing){
        return $user->id === $listing->user_id;
    }

    public function delete(User $user, Event $listing){
        return $user->id === $listing->user_id;
    }
}
