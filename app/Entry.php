<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
     protected $table="entries";

    protected $fillable=['provider_id','type_voucher','serie_voucher','num_voucher','date','tax'];

    public function provider(){
    	return $this->belongsTo('App\Provider');
    }

    public function articles(){
    	return $this->belongsToMany('App\Article');
    }


}
