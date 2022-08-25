<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $guarded=[];
    public function leavetypeId(){

        return $this->belongsTo(Type::class,'leave_type','id');
   

    }
    


}
