<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoptante extends Model
{
   protected $table = 'adoptante';

   public function animal(){
           	return $this->belongsTo('App\Animal', 'animal_id');
   }
}
