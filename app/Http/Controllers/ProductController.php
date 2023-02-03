<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Topping;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();
        $toppings = Topping::all();

        return view('products', compact('products','toppings'));
    }
}
