<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with = ['pictures'];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
