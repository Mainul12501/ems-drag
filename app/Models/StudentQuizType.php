<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentQuizType extends Model
{
    protected $guarded      = [];
    public function student()
    {
        return $this->belongsTo(StudentRole::class,'student_role_id');
    }
}

