<?php

namespace App\Http\Controllers;

use App\Http\Resources\SingleUserInfoResource;
use App\Models\User;

class ProfileController extends Controller
{
    public function getProfile(User $user)
    {
        return view(
            'layout.profile',
            [
                'userBio' => new SingleUserInfoResource($user),
            ]
        );
    }
}
