<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    public $primaryKey = 'id_project';

    public $timestamps = false;

    protected $fillable = [
    	'company_id',
    	'name',
    	'status',
    	'date',
    	'country_id',
    	'description',
    	'is_active',
    	'user_id',
    ];


    public static function getBbyUser($id_user){
    	return Project::where('user_id','=',$id_user)->get();
    }

    public static function getBbyCompany($company_id){
    	return Project::where('company_id','=',$company_id)->get();
    }

    // public static function getBbyCompany($company_id){
    //     return Employee::where('id_employee','=',$company_id)->get();
    // }


}
