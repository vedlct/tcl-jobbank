<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table='zone';
    protected $primaryKey='zoneId';
    public $timestamps=false;
}
