<?php

namespace Jasanya\BlogSystem\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'image', 'active', 'category', 'author_id'
    ];
}
