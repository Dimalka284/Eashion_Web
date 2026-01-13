<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //API
    public function apiIndex(){
        $products = Product::with('category')
            ->latest()
            ->take(4)
            ->get()
            ->map(function ($product) {
                $product->image_url = $product->image_path;
                return $product;
            });

        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    public function apiMen(){
        $products = Product::where('category_id',1)->get();
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    public function apiWomen(){
        $products = Product::where('category_id',2)->get();
        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }
}
