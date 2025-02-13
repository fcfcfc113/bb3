<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostImages extends Model
{
    protected $table = 'table_post_images';
    protected $fillable = ['post_id', 'image', 'from'];
    public $timestamps = false;
}
