<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\orders;
use App\Models\order_details;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Cart;



class CartController extends Controller
{
    public function add_cart($id){ 
        // session()->forget('cart');

        $products = Products::find($id);
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }else{
            $cart[$id] = [
                'name' => $products->name,
                'price' => $products->price,
                'quantity' => 1,
                'images' => $products->images,
                'total' => $products->total,

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

    public function delete_cart(Request $request)
    {
        if($request->id){
            $cart = session()->get('cart');
            unset($cart[$request->id]);
            session()->put('cart', $cart);
            $cart = session()->get('cart');
            $cartComponent = view('cart.component.cart_component', compact('cart'))->render();
            return response()->json(['cart_component'=>$cartComponent, 'code' => 200],status: 200);
        }
    }

    public function update_cart(Request $request)
    {
        if($request->id && $request->quatity){
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quatity;
            session()->put('cart', $cart);
            $cart = session()->get('cart');
            $cartComponent = view('cart.component.cart_component', compact('cart'))->render();
            return response()->json(['cart_component'=>$cartComponent, 'code' => 200],status: 200);
        }
    }

    public function  order(){
        $cart = session()->get('cart');
        return view('cart.order', compact('cart'));
    }

    public function save_order(Request $request){
        $cart = Session::get('cart');
        $user = Auth::user();
        $order = new orders;
        $order->user_id = $user->id;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->total = $request->total;
        $order->save();

        // foreach ($cart as $key => $value) {
        //     $order_details = new order_details;
        //     $order_details->order_id = $order->id;
        //     $order_details->product_id = $key;
        //     $order_details->quantily = $value['quantity'];
        //     $order_details->price = ($value['quantity']*$value['price']);
        //     $order_details->save();
        // }
        // session()->forget('cart');

    }
}
