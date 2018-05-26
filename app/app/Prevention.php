<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prevention extends Model
{
    protected $table = 'prevention';

	public $timestamps = false;

	public $primaryKey = 'id_prevention';
}
