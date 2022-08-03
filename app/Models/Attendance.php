<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded=[];
    public function employeerelation(){

        return $this->belongsTo(Employee::class, 'employee_name', 'id');
    }
    public function user(){

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

