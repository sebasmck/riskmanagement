<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitigation extends Model
{
    protected $table = 'mitigation';

	public $timestamps = false;

	public $primaryKey = 'id_mitigation';
}
