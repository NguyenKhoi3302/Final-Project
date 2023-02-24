<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Products;

class CartController extends Controller
{
    public function add_cart($id){ 
        $products = Products::find($id);
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }else{
            $cart[$id] = [
                'images' => $products->images,
                'name' => $products->name,
                'price' => $products->price,
                'quantity' => 1,
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'succes !!', 
        ],status: 200);
    }

    public function show_cart()
    {
        $cart = session()->get('cart');
        return view('cart.view', compact('cart'));
    }

    public function delete_cart($rowId)
    {
        Cart::remove($rowId);

        return redirect()->back();
    }

    public function update_quantity(Request $request, $rowId)
    {
        Cart::update($rowId, $request->input('update_qty'));

        return redirect()->back();
    }
}
