<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Product $product){
        $cartItem = Cart::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }
        
        return redirect()->route('cart.index')->with('success', 'Added to bag');
    }

    public function index(){
         $cartItems = Cart::with('product')
            ->where('user_id', auth()->id())
            ->get();

        return view('Frontend.cart', compact('cartItems'));
    }

    public function remove(Cart $cartItem)
    {
        if ($cartItem->user_id === auth()->id()) {
            $cartItem->delete();
        }
        return back()->with('success', 'Item removed');
    }

    public function update(Request $request, Cart $cartItem)
    {
        if ($cartItem->user_id === auth()->id()) {
            $request->validate(['quantity' => 'required|integer|min:1']);
            $cartItem->update(['quantity' => $request->quantity]);
        }
        return back()->with('success', 'Quantity updated');
    }


    
}

