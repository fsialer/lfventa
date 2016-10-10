<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $table="articles";

    protected $fillable=['category_id','code','name','stock','description','state'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function entries(){
    	return $this->belongsToMany('App\Entry')->withPivot('quantity', 'price_sale','price_buy');
    }

    public function sales(){
    	return $this->belongsToMany('App\Sale')->withPivot('quantity', 'discount');
    }
    
    public function scopeSearch($query,$name){
        return $query->where('name','LIKE',"%$name%");
    }
}
