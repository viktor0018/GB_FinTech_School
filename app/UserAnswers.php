<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswers extends Model
{
    //
    protected $table = 'user_answers';

    protected $fillable = [
        'user_id', 'question_id', 'is_correct',
    ];

    public function is_correct(){
        return 'is_correct';
    }

    public function scopeCorrect($query)
    {
        return $query->where('is_correct', 1);
    }

}
