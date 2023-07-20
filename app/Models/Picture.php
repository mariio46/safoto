<?php

namespace App\Models;

// use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Picture extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['event', 'year', 'user'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Route Model Binding by SLUG
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
