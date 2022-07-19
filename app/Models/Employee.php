<?php

namespace App\Models;

use App\Models\Designation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
protected $guarded=[];
public function department()
{
    return $this->belongsTo(Department::class, 'department_id', 'id');

}
public function designationRelation()
{
    return $this->belongsTo(Designation::class,'designation','id');
}

}
