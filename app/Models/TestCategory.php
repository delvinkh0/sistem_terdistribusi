<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCategory extends Model
{
    use HasFactory;
    protected $table = 'test_category';

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
