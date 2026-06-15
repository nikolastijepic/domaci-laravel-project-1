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
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:150|unique:products',
            'description' => 'required|string|min:10|max:500',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
            'image' => 'required|string',
            ]);

        $product = Product::create($validated);

        return redirect()->route('admin.all.products')
            ->with('success', 'Proizvod je uspesno dodat.')
            ->with('new_product_id', $product->id);
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
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:150|unique:products,name,'.$product->id,
            'description' => 'required|string|min:10|max:500',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
            'image' => 'required|string',
        ]);

        $product->update($validated);

        return redirect()->route('admin.all.products');
    }
}
