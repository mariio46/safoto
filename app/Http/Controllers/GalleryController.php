<?php

namespace App\Http\Controllers;

use App\Http\Resources\PictureResource;
use App\Models\Event;
use App\Models\Picture;
use App\Models\User;
use App\Models\Year;

class GalleryController extends Controller
{
    public function index()
    {
        return view('layout.galleries', [
            'pictures' => PictureResource::collection(Picture::inRandomOrder()->get()),
        ]);
    }

    public function getUserPicture(User $user)
    {
        return view(
            'layout.gallery',
            [
                'user' => $user->username,
                'pictures' => PictureResource::collection($user->pictures()->latest()->get()),
            ]
        );
    }

    public function getEventPicture(Event $event)
    {
        return view('layout.event', [
            'eventName' => $event->eventName,
            'pictures' => PictureResource::collection($event->pictures()->latest()->get()),
        ]);
    }

    public function getYearPIcture(Year $year)
    {
        return view('layout.years', [
            'yearName' => $year->yearName,
            'pictures' => PictureResource::collection($year->pictures()->latest()->get()),
        ]);
    }
}
