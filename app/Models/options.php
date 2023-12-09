<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    use HasFactory;

    protected $table = 'options';
    public $timestamps = false;

    protected $fillable = [
        'option_name',
        'value'
    ];
    public function questions()
    {
        return $this->belongsToMany(questions::class, 'options_questions', 'options_id', 'questions_id');
    }

    public function userAnswers()
    {
        return $this->hasMany(UserAnswers::class);
    }
}
