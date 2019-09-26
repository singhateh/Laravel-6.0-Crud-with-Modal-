<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $filable = ['firstname','lastname','gender','email'] ;
    protected $primaryKey ='id';
}
 