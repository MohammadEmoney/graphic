<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // return view();
    }

    public function show(Product $product)
    {
        $product->load(['media', 'category', 'categories', 'attributes']);
        return view('theme.products.show', compact('product'));
    }
}
