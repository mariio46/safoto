<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::whereHas('pictures')->Where('isAdmin', 0)->select(['username', 'profile'])->get();
        $pictures = [
            '../storage/image/default/art1.jpg',
            '../storage/image/default/art2.jpg',
            '../storage/image/default/art3.jpg',
            '../storage/image/default/art4.jpg',
        ];
        return view('layout.home', compact('users', 'pictures'));
    }
}
