<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Cart;

class CartSummary extends Component
{
    public $cartItems = [];
    public $selectedItems = [];

    public function mount()
    {
        $this->loadCartItems();
    }

    public function loadCartItems()
    {
        $this->cartItems = Cart::with('product')->where('user_id', auth()->id())->get()->toArray();
        $this->selectedItems = array_column($this->cartItems, 'id');
    }

    public function updatedSelectedItems()
    {
        // Livewire updates subtotal automatically
    }

    public function increment($cartId)
    {
        $cart = Cart::find($cartId);
        if ($cart) {
            $cart->increment('quantity');
            $this->loadCartItems();
        }
    }

    public function decrement($cartId)
    {
        $cart = Cart::find($cartId);
        if ($cart && $cart->quantity > 1) {
            $cart->decrement('quantity');
            $this->loadCartItems();
        }
    }

    public function remove($cartId)
    {
        $cart = Cart::find($cartId);
        if ($cart) {
            $cart->delete();
            $this->loadCartItems();
        }
    }

    public function getSubtotalProperty()
    {
        $subtotal = 0;
        foreach ($this->cartItems as $item) {
            if (in_array($item['id'], $this->selectedItems)) {
                $price = $item['product']['price'];
                $discount = $item['product']['discount'] ?? 0; 
                $discountedPrice = $price - ($price * $discount / 100);
                
                $subtotal += $discountedPrice * $item['quantity'];
            }
        }
        return $subtotal;
    }

    public function render()
    {
        return view('livewire.cart-summary');
    }
}
