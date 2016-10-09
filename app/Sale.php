<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table="sales";

    protected $fillable=['customer_id','user_id','type_voucher','serie_voucher','num_voucher','date','tax','total'];

    public function customer(){
    	return $this->belongsTo('App\Person');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function articles(){
    	return $this->belongsToMany('App\Article')->withPivot('quantity', 'discount','price_sale');
    }
}
