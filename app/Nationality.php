<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    //
    protected $table = 'nationality';
    public $timestamps = false;
    public $primaryKey = 'nationalityId';
}
