<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
   protected $table = 'carrera';

   public function Voluntario(){
   	    return $this->hasMany('App/Voluntarios');
   }
}
