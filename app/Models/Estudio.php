<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    protected $table = 'estudis';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;
}
