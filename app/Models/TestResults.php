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
        'test_id'
    ];

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }
}