<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
