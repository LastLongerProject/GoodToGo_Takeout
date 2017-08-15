<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container_type extends Model
{
	protected $table = 'container_types';
	protected $fillable = ['id','type','decoration'];


	        public function container()
    {
        return $this->hasMany('App\Vendor');
    }
}