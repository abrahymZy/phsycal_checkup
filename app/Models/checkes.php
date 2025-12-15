<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class checkes extends Model
{
     protected $fillable =['type_checkup','date','simple_id','sik_id'];


     public function simples(){
    return $this->belongsTo(simples::class,'simple_id');
   }
     public function sickest(){
    return $this->belongsTo(sickest::class,'sik_id');
   }
}
