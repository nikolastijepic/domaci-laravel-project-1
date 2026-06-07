<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $products = Product::latest('id')
            ->take(6)
            ->get();

        return view('homepage', compact('products'));
    }
}
