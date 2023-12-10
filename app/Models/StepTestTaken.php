<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepTestTaken extends Model
{
    use HasFactory;

    protected $table = 'steptesttaken';
    public $timestamps = false;

    protected $casts = [
        'datenow' => 'datetime',
    ];

    protected $fillable = [
        'user_id',
        'step_id',
        'datenow'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function step()
    {
        return $this->belongsTo(Step::class, 'step_id');
    }

}
