<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    CONST EYE = 1;
    CONST BOX = 2;
    CONST SET = 3;
    CONST BIG_BOX = 4;
    CONST BAG = 5;

    protected $table = 'table_categories';
    protected $fillable = ['name', 'slug', 'description', 'image', 'parent_id' , 'type'];

}
