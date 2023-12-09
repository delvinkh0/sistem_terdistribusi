<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResults extends Model
{
    use HasFactory;
    protected $table = 'testresults';
    public $timestamps = false;

    protected $fillable = [
        'resultName',
        'resultDescription',
        'result_solution',
        'test_id',
        'first_limit',
        'end_limit',
        'max_score',
    ];

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }
}
