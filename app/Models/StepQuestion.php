<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepQuestion extends Model
{
    use HasFactory;

    protected $table = 'StepQuestion';
    public $timestamps = false;

    protected $fillable = [
        'stepQuestion',
        'step_id'
    ];

    public function step()
    {
        return $this->belongsTo(Step::class);
    }

}
