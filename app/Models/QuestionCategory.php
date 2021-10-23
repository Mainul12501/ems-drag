<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    protected $table = "quizzes_questions";
    public $timestamps = false;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
