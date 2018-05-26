<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Db;

class Employee_r extends Model
{
    protected $table = 'employee_r';

	public $timestamps = false;

	public $primaryKey = 'id';

	public $fillable = ['id_project','name','position','email','phone',];

	public function baseEmployee(){
		return $this->hasOne('App\Employee', 'id_employee', 'id');
	}

	public static function getByProject($id_project){
		return Employee_r::where('id_project', '=', $id_project)->get();
	}

	


	
}
