<?php

namespace App\Policies;

use App\Models\Link;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{
    public function protectedLink(User $user, Link $link): bool
    {
        return $link->user->is($user); // carrega o modelo relacionado e compara
    }
}
