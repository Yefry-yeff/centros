<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colonias extends Model
{
    /* use HasFactory; */
    protected $table= "colonia";
    protected $fillable = ['id','nombre','lat','lng'];
}
