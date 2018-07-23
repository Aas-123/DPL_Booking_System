<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class NewsFeed extends Model
{
     public function User()
    {
    	return $this->belongsTo(User::class);
    }
}
