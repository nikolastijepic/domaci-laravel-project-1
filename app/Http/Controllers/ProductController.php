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

    public function deleteProduct($product)
    {
        $singleProduct = Product::where(['id' => $product])->first();

        if ($singleProduct === null)
        {
            die("Ovaj proizvod ne postoji!");
        }

        $singleProduct->delete();

        return redirect()->back();
    }

    public function getProduct($product)
    {
        $singleProduct = Product::where(['id' => $product])->first();

        if ($singleProduct === null)
        {
            die("Ovaj proizvod ne postoji!");
        }

        return view('edit-product', compact('singleProduct'));
    }

    public function editProduct(Request $request, $product)
    {
        $request->validate([
            'name' => 'required|string|min:3|unique:products,name,'.$product,
            'description' => 'required|string|min:10',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
            'image' => 'required|string',
        ]);

        $singleProduct = Product::where(['id' => $product])->first();

        if ($singleProduct === null)
        {
            die("Ovaj proizvod ne postoji!");
        }

        $singleProduct->update([
            'name' => $request->name,
            'description' => $request->description,
            'amount' => $request->amount,
            'price' => $request->price,
            'image' => $request->image
        ]);

        return redirect()->route('admin.all.products');
    }
}
