<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_r extends Model
{
    protected $table = 'employee_r';

	public $timestamps = false;

	public $primaryKey = 'id';

	public $fillable = ['company_id', 'project_id'];
}
