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
use Str;



class CartController extends Controller
{
    public function add_cart($id, Request $request){
        // session()->forget('cart');

        $products = Products::find($id);
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + (int)($request->qty ?? 1);
        }else{
            $cart[$id] = [
                'name' => $products->name,
                'price' => $products->price,
                'quantity' => $request->qty ?? 1,
                'images' => $products->images,
                'total' => $products->total,
                'options' => [
                    'size' => $request->size,
                    'color' => $request->color
                ]
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
    public function apply_payment(Request $request){
        Session::put('payment_method', $request->payment_method);
    }
    public function order(){
        $payment_method = session()->get('payment_method');
        $cart = session()->get('cart');
        $footer = $this->footer();
        $data =['footer' => $footer, 'cart' => $cart];
        return view('cart.order', $data);
    }

    public function save_order(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'note' => 'max: 1000',
        ]);
        $cart = Session::get('cart');
        $user = Auth::user();
        $code = Str::upper(Str::random(10));
        $payment_method = Session::get('payment_method');
        $order = new orders;
        $order->user_id = $user->id;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->code = $code;
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
        if($payment_method === 'vnpay'){
            $this->vnpay($order->code, $order->total);
        }else
            $request->session()->forget(['cart','carcoupon_codet','discount','payment_method']);
        return redirect()->route('shop');
    }
    public function store_vnpay(Request $request){
        $order = orders::where('code', $request->vnp_OrderInfo)->first();
        if($request->vnp_ResponseCode == "00") {
            $message = 'Đã thanh toán qua VNPAY';
        }else{
            $message = 'Thanh toán qua VNPAY bị lỗi';
        }
        $order->status = $message;
        $order->save();
        $request->session()->forget(['cart','carcoupon_codet','discount','payment_method']);
        return redirect()->route('shop')->with('msg' , $message);
    }
    public function vnpay($order_code, $order_total){
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('storeVnpay');
        $vnp_TmnCode = "W4Z1XBMO";
        $vnp_HashSecret = "OYDUODQAVMHHUJWMKWECUJONLAILFLXV";
        $vnp_TxnRef = (string)$order_code;
        $vnp_OrderInfo = $order_code;
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = (int)$order_total * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => 200,
            'message' => 'OK',
            'data' => $vnp_Url
        );
        header('Location: ' . $vnp_Url);
        die();
            // vui lòng tham khảo thêm tại code demo
        }
}
