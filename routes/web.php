<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Sản phẩm 1', 'price' => 100000],
        ['id' => 2, 'name' => 'Sản phẩm 2', 'price' => 200000],
    ]);
});
