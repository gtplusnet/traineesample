<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tbl_student extends Model
{
   	protected $table = 'tbl_student';
	protected $primaryKey = "student_id";
    public $timestamps = false;
}