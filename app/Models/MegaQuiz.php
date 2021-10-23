<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MegaQuiz extends Model
{
    protected $table = "mega_quizzes";
    protected $guarded  = [];
    public function questionsAnswers()
    {
        return $this->hasMany('App\Models\QuizzesQuestionsAnswer', 'question_id', 'question_id');
    }
    public function QuestionsCategory()
    {
        return $this->hasMany('App\Models\QuestionCategory');
    }
    public function QuizResults()
    {
        return $this->hasOne('App\Models\QuizResult');
    }
}
