<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionSet extends Model
{
    protected $table='questionset';
    protected $primaryKey='questionSetId';
    public $timestamps=false;
}
