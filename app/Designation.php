<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table='designation';
    protected $primaryKey='designationId';
    public $timestamps=false;
}
