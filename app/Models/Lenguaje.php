<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lenguaje extends Model
{
    protected $table = 'llenguatges';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;


    public function proyectos()
    {
        return $this->belongsToMany('App\Models\Proyecto', 'llenguatges_projectes', 'id_projecte', 'id_llenguatge');
    }
}
