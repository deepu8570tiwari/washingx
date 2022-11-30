<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Checkoutcontroller extends Controller
{
    public function index(){
        $old_item=Cart::where('user_id',Auth::id())->get();
        foreach($old_item as $item){
            if(Product::where('id',$item->prod_id)->where('qty','<=',$item->prod_qty)->exists()){
                $removeItem=Cart::where('user_id',Auth::id())->where('prod_id',$item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cart_item=Cart::where('user_id',Auth::id())->get();
        return view('frontend.products.checkout',compact('cart_item'));
    }
    public function placeorder(Request $request){
       // print_r($_POST);
        $order =new Order();
        $order->user_id=Auth::id();
        $order->fname=$request->input('fname');
        $order->lname=$request->input('lname');
        $order->email=$request->input('email');
        $order->phone=$request->input('phone');
        $order->address1=$request->input('address1');
        $order->address2=$request->input('address2');
        $order->city=$request->input('city');
        $order->state=$request->input('state');
        $order->country=$request->input('country');
        $order->pincode=$request->input('pincode');
        $order->payment_mode=$request->input('payment_mode');
        $order->payment_id=$request->input('payment_id');
        $total=0;
        $cartItem_total=Cart::where('user_id',Auth::id())->get();
        foreach($cartItem_total as $prodtotal){
            $total+=$prodtotal->product->selling_price;
        }
        $order->total_price=$total;
        $order->tracking_no='Tiwari'.rand(1111,9999);
        $order->save();
        $cartItems=Cart::where('user_id',Auth::id())->get();
        foreach($cartItems as $cartItem){
            OrderItem::create([
                'order_id'=>$order->id,
                'prod_id'=>$cartItem->prod_id,
                'prod_qty'=>$cartItem->prod_qty,
                'prod_price'=>$cartItem->product->selling_price,
            ]);
            $prod=Product::where('id',$cartItem->prod_id)->first();
            $prod->qty=$prod->qty - $cartItem->prod_qty;
            $prod->update();
        }
        if(Auth::user()->address1==NULL){
            $user= User::where('id',Auth::id())->first();
            $user->name=$request->input('fname');
            $user->lastname=$request->input('lastname');
            $user->phone=$request->input('phone');
            $user->address1=$request->input('address1');
            $user->address2=$request->input('address2');
            $user->city=$request->input('city');
            $user->state=$request->input('state');
            $user->country=$request->input('country');
            $user->pincode=$request->input('pincode');
            $user->update();
        }
        $cartitems=Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartitems);
        if($request->input('payment_mode')=="Pay with Razarpay" || $request->input('payment_mode')=="Pay with Paypal"){
            return response()->json(['status'=>'Payment successfully completed']);
        }
        return redirect('/')->with('status','Order Placed successfully');
    }
    public function paywithrazorpay(Request $request){
        $cartItems=cart::where('user_id',Auth::id())->get();
        $total_price=0;
        foreach($cartItems as $item){
            $total_price+= $item->product->selling_price *$item->prod_qty;
        }
        $firstname =$request->input('firstname');
        $lastname= $request->input('lastname');
        $email =$request->input('email');
        $phone =$request->input('phone');
        $address1 =$request->input('address1');
        $address2 =$request->input('address2');
        $city =$request->input('city');
        $state =$request->input('state');
        $country =$request->input('country');
        $pincode =$request->input('pincode');
        return response()->json([
                'firstname'=> $firstname,
                'lastname'=> $lastname,
                'email'=> $email,
                'phone'=> $phone,
                'address1'=> $address1,
                'address2'=> $address2,
                'city'=> $city,
                'state'=> $state,
                'country'=> $country,
                'pincode'=> $pincode,
                'total_price'=>$total_price
        ]);
    }
}
