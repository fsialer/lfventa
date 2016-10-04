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
    	return $this->belongsToMany('App\Entry')->withTimeStamps();
    }

    public function sales(){
    	return $this->belongsToMany('App\Sale')->withTimeStamps();
    }
    
}
