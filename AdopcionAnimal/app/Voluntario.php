<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
	protected $table = 'voluntario';

   public function carrera(){
         return $this->belongsTo('App\Carrera', 'carrera_id');
   }
   public function usuario(){
         return $this->belongsTo('App\User', 'usuario_id');
   }
}
