<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'category';
    public $timestamps = false;
    public function test()
    {
        return $this->belongsToMany(Category::class, 'test_category', 'category_id', 'test_id');
    }
}
