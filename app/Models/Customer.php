<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';
	protected $fillable = ['phone'];

    public function container()
    {
        return $this->hasMany('App\Container');
    }

    //     public function vendor()
    // {
    //     return $this->hasMany('App\Vendor');
    // }
}
