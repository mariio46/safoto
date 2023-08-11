<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function biodata()
    {
        return $this->hasOne(Biodata::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getRouteKeyName(): string
    {
        return 'username';
    }

    public function profileCheck()
    {
        if ($this->profile) {
            Storage::delete($this->profile);
        }
        User::destroy($this->id);

        return to_route('usersmanagement.index')->with('success', 'User Has been deleted');
    }
}
