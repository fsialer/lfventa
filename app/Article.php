<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $table="articles";

    protected $fillable=['category_id','code','name','stock','description','image'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function entries(){
    	return $this->belongsToMany('App\Entry');
    }

    public function sales(){
    	return $this->belongsToMany('App\Sale');
    }
    
}
