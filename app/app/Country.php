<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

	public $timestamps = false;

	public $primaryKey = 'id';


	public static function getByCompany($company_id){
		return Country::where('id_company','=',$company_id)->get();
	}

}
