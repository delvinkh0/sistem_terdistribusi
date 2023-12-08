<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    public $timestamps = false;

    protected $fillable = [
        'category_name',
    ];
    public function test()
    {
        return $this->belongsToMany(Category::class, 'test_category', 'category_id', 'test_id');
    }
}
