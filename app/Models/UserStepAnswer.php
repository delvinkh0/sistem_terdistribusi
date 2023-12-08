<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStepAnswer extends Model
{
    use HasFactory;
    protected $table = 'userstepanswer';

    protected $fillable = [
        'user_id',
        'stepquestion_id',
        'userAnswer',
        'createdOn'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function stepQuestion()
    {
        return $this->belongsTo(StepQuestion::class,'stepquestion_id');
    }
}
