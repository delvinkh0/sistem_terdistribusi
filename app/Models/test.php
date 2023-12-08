<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsToMany(Category::class, 'test_category', 'test_id', 'category_id');
    }
    
    public function questions()
    {
        return $this->hasMany(questions::class,);
    }
    public function testResults()
    {
        return $this->hasMany(TestResults::class, 'test_id');
    }
}
