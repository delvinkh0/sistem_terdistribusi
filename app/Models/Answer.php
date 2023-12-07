<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    public function Question()
    {
        return $this->belongsToMany(Question::class, 'answers_questions', 'answers_id', 'questions_id');
    }
}
