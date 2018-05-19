<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';

	public $timestamps = false;

	public $primaryKey = 'id';
}
