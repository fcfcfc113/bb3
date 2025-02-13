<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\ProductsNotForSell;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Categories::all();
        $producttype = [
            Categories::EYE => 'Mắt đẹp' ,
            Categories::BOX => 'Box vừa/nhỏ',
            Categories::SET => 'Nguyên Set',
            Categories::BIG_BOX => 'Box lớn',
            Categories::BAG => 'Túi dây đeo'
        ];
        $typecategories = [];
        foreach($producttype as $key => $value){
            $typecategories[$key]['name'] = $value;
            $typecategories[$key]['data_categories'] = Categories::where('type', $key)->get();
        }
        $productlistnotsell = ProductsNotForSell::all();
        return view('pages.home' , compact('categories', 'productlistnotsell' , 'typecategories'));
    }
}
