<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){

        return view('cart.cart');
    }

    public function addToCart($id){
        $cartItems = session()->get('cartItems', []);
        $product = Product::findOrFail($id);
        
        if(isset($cartItems[$id])){
            $cartItems[$id]['quantity']++;
        } else {
            $cartItems[$id] = [
                'image_path' => $product->image_path,
                'name' => $product->name,
                'description' => $product->description,
                'details' => $product->details,
                'sizes' => $product->sizes,
                'quantity' => 1,
                'shipping' => $product->shipping,
                'price' => $product->price,  
            ];
        }

        session()->put('cartItems', $cartItems);

        return redirect()->back()->with('Success' , 'Cart Updated');
    }
}