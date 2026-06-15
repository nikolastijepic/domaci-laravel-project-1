<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('add-product');
    }
    public function getAllProducts()
    {
        $products = Product::all();

        return view('all-products', compact('products'));
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|unique:products',
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

        return redirect()->route('admin.all.products');
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }

    public function getProduct(Product $product)
    {
       return view('edit-product', compact('product'));
    }

    public function editProduct(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|min:3|unique:products,name,'.$product->id,
            'description' => 'required|string|min:10',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
            'image' => 'required|string',
        ]);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'amount' => $request->amount,
            'price' => $request->price,
            'image' => $request->image
        ]);

        return redirect()->route('admin.all.products');
    }
}
