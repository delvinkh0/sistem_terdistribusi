<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswers extends Model
{
    use HasFactory;

    protected $table = 'user_answers';
    protected $fillable = [
        'user_id',
        'questions_id',
        'options_id',
        'datenow'
    ];
    public $timestamps = false;

    protected $casts = [
        'datenow' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function questions()
    {
        return $this->belongsTo(Questions::class, 'questions_id');
    }

    public function options()
    {
        return $this->belongsTo(Options::class, 'options_id');
    }

}
