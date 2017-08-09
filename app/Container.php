<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
	protected $table = 'containers';
    protected $fillable = ['number','status','vendor_id','customer_id'];

	    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
	
	public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }
}
