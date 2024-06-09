<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = include resource_path('config/products.php');

        return view('welcome', compact('products'));
    }
}
