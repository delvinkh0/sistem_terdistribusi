<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
