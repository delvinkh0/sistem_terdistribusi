<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class options extends Model
{
    use HasFactory;
    protected $table = 'options';
    public $timestamps = false;

    public function questions()
    {
        return $this->belongsToMany(questions::class, 'options_questions', 'options_id', 'questions_id');
    }
}
