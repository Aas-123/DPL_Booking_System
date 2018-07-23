<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Result;
use App\Point;
use App\NewsFeed;
use App\Highlight;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function result()
    {
        return $this->hasMany(Result::class);

    }

     public function point()
    {
        return $this->hasMany(Point::class);

    }

    public function news_feed()
    {
        return $this->hasMany(NewsFeed::class);;
    }

    public function highlight()
    {
        return $this->hasMany(Highlight::class);;

    }
}
