<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\orders;
use App\Models\order_details;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Cart;
use DB;



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
        $footer = $this->footer();
        $data =['footer' => $footer, 'cart' => $cart];
        return view('cart.view', $data);
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

    public function apply_coupon(Request $request)
    {
        // $request->session()->flush();
        $coupon = DB::table('coupon')->where('coupon_code', '=', $request->input('coupon'))->first();
        if($coupon){
            $message = "Áp dụng thành công";
            Session::put('id', $coupon->id);
            Session::put('coupon_code', $coupon->coupon_code);
            Session::put('discount', $coupon->discount);
            Session::put('min_total', $coupon->min_total);
            Session::put('max_discount', $coupon->max_discount);
        }else{
            session::forget(['carcoupon_codet','discount']);
            $message = "Mã không tồn tại";
        }
        return redirect()->route('showCart');
    }

    public function  order(){
        $cart = session()->get('cart');
        $footer = $this->footer();
        $data =['footer' => $footer, 'cart' => $cart];
        return view('cart.order', $data);
    }

    public function save_order(Request $request){
        //code
        $cart = Session::get('cart');
        $user = Auth::user();
        $order = new orders;
        $order->user_id = $user->id;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->note = $request->note;
        $order->total = $total ?? $request->total;
        $order->save();

        foreach ($cart as $key => $value) {
            $order_details = new order_details;
            $order_details->order_id = $order->id;
            $order_details->product_id = $key;
            $order_details->product_name = $value['name'];
            $order_details->quantity = $value['quantity'];
            $order_details->price = ($value['quantity']*$value['price']);
            $order_details->save();
        }
        $request->session()->forget(['cart','carcoupon_codet','discount']);
        // session()->forget('cart','carcoupon_codet','discount');

        return redirect()->route('shop');
 }
}
