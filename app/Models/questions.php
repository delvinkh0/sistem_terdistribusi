<?php

namespace App\Models;

use App\Models\options;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Questions extends Model
{
    use HasFactory;
    protected $table = 'questions';
    public $timestamps = false;

    protected $fillable = [
        'question_name',
        'test_id',
    ];

    public function options()
    {
        return $this->belongsToMany(options::class, 'options_questions', 'questions_id', 'options_id');
    }
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function userAnswers()
    {
        return $this->hasMany(UserAnswers::class);
    }
}
