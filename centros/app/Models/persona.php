<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
   /*  use HasFactory; */
   protected $table= "persona";
    protected $fillable = ['idpersona','identidad','escuela','cantidad','users_id','escuela_id', 'created_at','updated_at'];
}
