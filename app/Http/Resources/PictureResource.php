<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PictureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
            [
                'imgName' => $this->imgName,
                'image' => $this->image,
                'event' => [
                    'eventName' => $this->event->eventName,
                    'slug' => $this->event->slug,
                ],
                'year' => [
                    'yearName' => $this->year->yearName,
                    'slug' => $this->year->slug,
                ],
                'user' => [
                    'username' => $this->user->username,
                ],
            ];
    }
}
