<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'author',
        'title',
        'post_image',
        'post_content',
        'post_date',
        'slug',
    ];
}
