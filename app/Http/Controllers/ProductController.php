<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFromRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('product.create');
    }

    public function store(ProductFromRequest $request)
    {
        $data = $request->validated();
        $product = new Product();
        $product->name = $data['name'];
        $product->category = $data['category'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->save();
        return redirect('home')->with('success', 'product added successfully');
    }
}
