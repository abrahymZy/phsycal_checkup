<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sickest extends Model
{
     protected $fillable =['name','age'];//
   //

   public function checkes(){
    return $this->hasMany(checkes::class);
   }
}
