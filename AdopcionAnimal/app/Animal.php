<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
	protected $table = 'animal';


    public function adoptantes(){
    	return $this->hasMany('App/Adoptante');
    	//hasOne
    }

    public function usuarios(){
    	return $this->belongsTo('App\User', 'usuario_id');
    }
}
