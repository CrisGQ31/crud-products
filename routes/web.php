<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class)->names([
    'index' => 'products.index',
]);

Route::get('/', function () {
    $products = Product::all();
    return view('products.index', compact('products'));
});
