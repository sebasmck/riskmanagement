<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    public $primaryKey = 'id_project';

    public $timestamps = false;


    public static function getBbyUser($id_user){
    	return Project::where('user_id','=',$id_user)->get();
    }

}
