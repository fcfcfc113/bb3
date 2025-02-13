<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsNotForSell extends Model
{
    protected $table = 'table_main_products_not_for_sell';
    protected $fillable = ['name', 'description', 'image', 'level'];
}
