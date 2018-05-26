<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

	public $timestamps = false;

	public $primaryKey = 'id_employee';


	public static function getByCompany($company_id){
		return Employee::where('id_company', '=', $company_id)->get();
	}
	
}
