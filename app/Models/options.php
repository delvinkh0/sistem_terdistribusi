<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class options extends Model
{
    use HasFactory;
    protected $table = 'options';
    public $timestamps = false;
    public function question()
    {
        return $this->belongsTo(questions::class);
    }
}
