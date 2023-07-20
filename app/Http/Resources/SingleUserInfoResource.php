<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SingleUserInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'username' => $this->username,
            'profile' => $this->profile,
            'biodata' => [
                'fullName' => $this->biodata->fullName,
                'birthDay' => $this->biodata->birthDay,
                'birthCity' => $this->biodata->birthCity,
                'instagram' => $this->biodata->instagram,
                'facebook' => $this->biodata->facebook,
                'tiktok' => $this->biodata->tiktok,
            ],
        ];
    }
}
