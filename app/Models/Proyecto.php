<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'projectes';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;


    public function lenguajes()
    {
        return $this->belongsToMany('App\Models\Lenguaje', 'llenguatges_projectes', 'id_projecte', 'id_llenguatge');
    }
}
