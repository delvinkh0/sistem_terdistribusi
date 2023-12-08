<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    use HasFactory;
    protected $table = 'questioncategory';
    public $timestamps = false;

    protected $fillable = [
        'questioncategory_name',
    ];
}
