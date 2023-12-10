<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepQuestion extends Model
{
    use HasFactory;

    protected $table = 'step_question';
    public $timestamps = false;

    protected $fillable = [
        'step_question',
        'step_id',
        'placeholder'
    ];

    public function step()
    {
        return $this->belongsTo(Step::class);
    }

}
