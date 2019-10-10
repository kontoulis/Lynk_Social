<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Ballen\Gravel\Gravatar;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Returns the user's Gravatar avatar URL.
     *
     * @return string
     */
    public function getAvatarAttribute()
    {
        if ($this->getOriginal('avatar')) {
            return '/storage/' . $this->getOriginal('avatar');
        } else {
            $avatar = new Gravatar($this->email);
            $avatar->setDefaultAvatar("https://cdn0.iconfinder.com/data/icons/sport-achievment-badges/128/sport_badges-10-512.png");
            $avatar->setSize(200);
            return $avatar->buildGravatarUrl();
        }
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followings()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id')->withTimestamps();
    }
}
