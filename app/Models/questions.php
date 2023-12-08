<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory;
    protected $table = 'questions';
    public $timestamps = false;
    public function options()
    {
        return $this->belongsToMany(options::class, 'options_questions', 'questions_id', 'options_id');
    }
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    
}
