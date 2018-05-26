<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    protected $table = 'risk';

	public $timestamps = false;

	public $primaryKey = 'id_risk';

	public function employee(){

		return $this->hasOne('App\Employee_r', 'id', 'id_employee');
	}

}
