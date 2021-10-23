<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRole extends Model
{
    protected $guarded  = [];
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    public function type()
    {
        return $this->hasMany(StudentQuizType::class);
    }
}
