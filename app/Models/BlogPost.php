<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class BlogPost extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'title',
        'category_id',
        'description',
        'content',
        'image',
    ];
}
