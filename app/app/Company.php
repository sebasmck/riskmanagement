<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
	protected $table = 'company';

	public $timestamps = false;

	public $primaryKey = 'id_company';


}
