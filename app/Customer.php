<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="customers";

    protected $fillable=['name','surname','type_document','num_document','phone','email'];

    public function sales(){
    	return $this->hasMany('App\Sale');
    }
}
