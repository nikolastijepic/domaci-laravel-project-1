<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = [
            'iPhone 17 256GB' , 'iPhone 17 Pro 512GB', 'iPhone 17 Pro Max 1TB', 'Samsung Galaxy S26 256GB'
        ];

        $productsOnSale = [
            'iPhone 17 256GB', 'Samsung Galaxy S26 256GB'
        ];

        $saleMessage = 'SUPER SNIZENJE!';

        return view('shop', compact('products', 'productsOnSale', 'saleMessage'));
    }
}
