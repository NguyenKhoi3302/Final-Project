<?php

namespace App\Http\Controllers;

use App\Mail\confirmOrder;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\orders;
use App\Models\order_details;
use App\Models\coupon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use DB;
use Str;


class CartController extends Controller
{
    public function add_cart($id)
    {
        $product = Products::findOrFail($id);
        $cart = session()->get('cart', []);

        if (!auth()->check()) {
            // Khách hàng chưa đăng nhập, lưu giỏ hàng vào phiên
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    'product_id' => $product->id,
                    'quantity' => 1,
                ];
            }
            session()->put('cart', $cart);
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $id,
                'quantity' => 1,
            ]);
        }

        return response()->json([
            'code' => 200,
            'message' => 'Thêm sản phẩm vào giỏ hàng thành công',
        ], 200);
    }

    public function show_cart()
    {
        if (auth()->check()) {
            $user = auth()->user();
            $cart = Cart::where('user_id', $user->id)->get();
        }
        else {
            $cart = session()->get('cart');
        }
        $footer = $this->footer();
        $data = ['footer' => $footer, 'cart' => $cart];

        return view('cart.view', $data);

    }

    public function delete_cart(Request $request)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $cart_db = Cart::where('id', $request->id)->first();
            $cart_db->delete();
            $cart = Cart::where('user_id', $user->id)->get();
        }
        else {
            $cart = session()->get('cart');
            unset($cart[$request->id]);
            session()->put('cart', $cart);
            $cart = session()->get('cart');
        }
        $cartComponent = view('cart.component.cart_component', compact('cart'))->render();
        return response()->json(['cart_component' => $cartComponent,
            'code' => 200], status: 200);
    }

    public function update_cart(Request $request)
    {
        if ($request->id && $request->quatity) {
            if (auth()->check()) {
                $user = auth()->user();
                $id = $_GET['id'];
                $cart = Cart::where('id', $id)->first();
                if ($cart) {
                    $cart->quantity = $request->quatity;
                    $cart->save();
                }
                $cart = Cart::where('user_id', $user->id)->get();
            } else {
                $cart = session()->get('cart');
                $cart[$request->id]['quantity'] = $request->quatity;
                session()->put('cart', $cart);
                $cart = session()->get('cart') ?? [];

            }
            $cartComponent = view('cart.component.cart_component', compact('cart'))->render();
            return response()->json(['cart_component' => $cartComponent, 'code' => 200], status: 200);
        }
    }

    public function apply_coupon(Request $request)
    {
        // $request->session()->flush();
        $coupon = coupon::where('coupon_code', '=', $request->input('coupon'))->first();
        $used = $coupon->user_id;
        if(empty($used)){
            $used = '';
        }
        else{
            $used = json_decode($used);
        }
        $remain = $coupon->remaining;
        if ($coupon) {
            if(strtotime(date('Y-m-d')) > strtotime($coupon->date_expire)){
                Session::put('message', "Mã đã hết hạn");
            }
            elseif($remain < 1){
                Session::put('message', "Mã đã hết lượt sử dụng");
            }
            elseif(strtotime(date('Y-m-d')) < strtotime($coupon->date_start)){
                Session::put('message', "Mã không khả dụng");
            }
            elseif(in_array(auth()->id(), $used)){
                Session::put('message', "Bạn đã sử dụng mã này rồi");
            }
            else{
                $c = [
                    'id' => $coupon->id,
                    'coupon_code' => $coupon->coupon_code,
                    'discount' => $coupon->discount,
                    'min_total' => $coupon->min_total,
                    'max_discount' => $coupon->max_discount,
                    'coupon_type' => $coupon->coupon_type,
                ];
                Session::put('coupon', $c);
                Session::put('message', "Áp dụng thành công");
            }
        }
        else {
            session::forget(['carcoupon_codet', 'discount']);
        }
        return redirect()->route('order');
    }

    public function apply_payment(Request $request)
    {
        Session::put('payment_method', $request->payment_method);
    }

    public function order()
    {
        $payment_method = session()->get('payment_method');
        if (auth()->check()) {
            $user = auth()->user();
            $cart = Cart::where('user_id', $user->id)->get();
        } else {
            $cart = session()->get('cart');
        }

        $footer = $this->footer();
        $data = ['footer' => $footer, 'cart' => $cart];
            return view('cart.order', $data);
    }

    public function save_order(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'note' => 'max: 1000',
        ]);
        //update coupon
        if(!empty(Session::get('coupon'))){
            $id_coupon = Session::get('coupon')['id'];
            $coupon = coupon::where('id', $id_coupon)->first();
            $remain = $coupon->remaining;
            $used = $coupon->user_id;
            $discont = $coupon->discount;
            $counpon_type = $coupon->coupon_type;
            if(empty($used)){
                $used = '';
            }
            else{
                $used = json_decode($used);
            }
            $remain -= 1;
            $used[] = auth()->id();
            $coupon->user_id = json_encode($used);
            $coupon->remaining = $remain;
            $coupon->save();
        }
        //save order
        $user = Auth::user();
        $code = Str::upper(Str::random(10));
        $payment_method = Session::get('payment_method');
        $order = new orders;
        $order->user_id = $user->id;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->code = $code;
        $order->status = 'Chờ xác nhận';
        $order->note = $request->note;
        $order->total = $total ?? $request->total;
        $order->province = $request->province;
        $order->district = $request->district;
        $order->ward = $request->ward;
        $order->save();
        if (auth()->check()) {
            $user = auth()->user();
            $cart = Cart::where('user_id', $user->id)->get();
        } else {
            $cart = Session::get('cart');
        }
        $ship = 30000;
        if($request->province == 'Thành phố Hồ Chí Minh'){
            $ship = 0;
        }
        $mail_data = [
            'cart' => $cart,
            'phone' => $request->phone,
            'address' => $request->address.' - '.$request->ward.' - '.$order->district.' - '.$request->province,
            'name' => $request->name,
            'total' =>  $order->total,
//            'id' => $order->id,
            'payment' => $payment_method,
            'ship' => $ship,
        ];
        if(!empty($discont)){
            $mail_data[] = [
                'discount' => $discont,
                'coupon_type' => $counpon_type
            ];
        }
        foreach ($cart as $key => $value) {
            $product = DB::table('products')->where('id', $value['product_id'])->first();
            $order_details = new order_details;
            $order_details->order_id = $order->id;
            $order_details->product_id = $product->id;
            $order_details->product_name = $product->name;
            $order_details->quantity = $value['quantity'];
            $order_details->price = $product->price;
            $order_details->save();
            $value->delete();
        }
        Mail::send('auth.email.orderConfirm', ['data' => $mail_data], function($message) use($request){
            $message->to($request->email);
            $message->subject('Email xác nhận đơn hàng S - Watch');
        });
        if ($payment_method === 'vnpay') {
            $this->vnpay($order->code, $order->total);
        }
        else {
            $request->session()->forget(['cart', 'carcoupon_codet', 'discount', 'payment_method', 'coupon', 'message']);
        }
        return redirect()->route('shop');
    }

    public function store_vnpay(Request $request)
    {
        $order = orders::where('code', $request->vnp_OrderInfo)->first();
        if ($request->vnp_ResponseCode == "00") {
            $message = 'Đã thanh toán qua VNPAY';
        } else {
            $message = 'Thanh toán qua VNPAY bị lỗi';
        }
        $order->status = $message;
        $order->save();
        $request->session()->forget(['cart', 'carcoupon_codet', 'discount', 'payment_method']);
        return redirect()->route('shop')->with('msg', $message);
    }

    public function vnpay($order_code, $order_total)
    {
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
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
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
