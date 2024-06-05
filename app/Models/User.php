<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'first_name',
        'last_name',
        'username',
        'email',
        'mobile',
        'mobile_verification_code',
        'email_verified_at',
        'mobile_verified_at',
        'description',
        'thumbnail',
        'profile',
        'gender',
        'education',
        'job',
        'relationship',
        'location',
        'is_private',
        'is_banned',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function is_friend()
    {
        $friendship = Friend::where(function($query) {
            $query->where('user_id', $this->id)
                ->where('friend_id', auth()->user()->id);
        })->orWhere(function($query) {
            $query->where('friend_id', $this->id)
                ->where('user_id', auth()->user()->id);
        })->first();

        return $friendship->status ?? '';
    }




    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
