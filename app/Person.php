<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table="people";

    protected $fillable=['name','type_document','num_document','phone','email','state','type'];

    public function entries(){
    	return $this->hasMany('App\Entry');
    }
    public function sales(){
    	return $this->hasMany('App\Sale');
    }
    public function scopeSearch($query,$name){
        return $query->where('name','LIKE',"%$name%");
    }


}
