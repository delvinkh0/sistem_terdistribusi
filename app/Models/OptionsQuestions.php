<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionsQuestions extends Model
{
    use HasFactory;
    protected $table = 'options_questions';
    public $timestamps = false;
}
