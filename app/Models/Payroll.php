<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $guarded=[];
    public function  employeerelation(){

        return $this->belongsTo(Employee::class, 'employee_name', 'id');
    }
}
