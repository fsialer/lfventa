<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
     protected $table="entries";

    protected $fillable=['provider_id','type_voucher','serie_voucher','num_voucher','date','tax','total'];

    public function provider(){
    	return $this->belongsTo('App\Person');
    }

    public function articles(){
    	return $this->belongsToMany('App\Article')->withPivot('quantity', 'price_sale','price_buy');
    }
    public function scopeSearch($query,$name){
        return $query->where('num_voucher','LIKE',"%$name%");
    }


}
