<?php

namespace App\Http\Controllers;

use App\Http\Resources\SingleUserInfoResource;
use App\Models\User;
use Illuminate\Http\Request;

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
