<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   Protected $fillable = ['firstname','lastname','gender','country','city', 'address'];
   Protected $primaryKey = 'id';
}
