<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Category extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'title',
        'description',
    ];

    public function blogpost()
    {
        return $this->hasMany(BlogPost::class, 'blog_post_id');
    }

}
