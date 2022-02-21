<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [

        'name', 'phone', 'hiring_date', 'work_hours', 'shift', 'gender',
'personal_id','visa_num'

    ];
    
   
}
