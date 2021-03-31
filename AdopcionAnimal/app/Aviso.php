<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
	protected $table = 'aviso';

    public function usuario(){
         return $this->belongsTo('App\User', 'usuario_id');
   }
}
