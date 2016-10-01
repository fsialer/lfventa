<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table="people";

    protected $fillable=['name','type_document','num_document','phone','email','state','type'];

    public function sales(){
    	return $this->hasMany('App\Sale');
    }
}
