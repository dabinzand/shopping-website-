<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

   protected $table="post";
  public $timestamps=false;// labo awaya ka agar insertt kr baxoe create at u update at deta nawe awja agar away dagre la dache wata la table post ba awana nabe 
  protected $casts=['sizes'=>'array'  ];//wata aw listana kamay ba array danaserndre
}
