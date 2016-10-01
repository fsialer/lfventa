<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table="providers";

    protected $fillable=['company','contact','phone','email'];
    public function entries(){
    	return $this->hasMany('App\Entry');
    }
}
