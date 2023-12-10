<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    protected $table = 'step';
    public $timestamps = false;
    protected $fillable = [
        'stepName',
        'stepDescription',
        'step_id'
    ];
    public function stepquestion()
    {
        return $this->hasMany(StepQuestion::class, 'step_id');
    }
}
