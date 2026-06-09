<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }
    public function create()
    {
       return view('add-products');
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:10',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
            'image' => 'required|string',
            ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'amount' => $request->amount,
            'price' => $request->price,
            'image' => $request->image
        ]);
    }
}
