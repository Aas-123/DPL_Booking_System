<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Booking extends Model
{
    public function customer()
    {
    	return $this->hasOne(Customer::class);
    }
}
