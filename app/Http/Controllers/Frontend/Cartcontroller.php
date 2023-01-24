<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class Cartcontroller extends Controller
{
    public function addProduct(Request $request){
        $product_id=$request->input('product_id');
        $product_qty=$request->input('product_qty');
        if(Auth::check()){
            $product_check=Product::where('id',$product_id)->first();
           
            if($product_check){
                if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                   return response()->json(['status'=> $product_check->name.' Already Added to cart']);
                }else{
                    $cartItem= new Cart();
                    $cartItem->prod_id=$product_id;
                    $cartItem->user_id=Auth::id();
                    $cartItem->prod_qty=$product_qty; 
                    $cartItem->save();
                    return response()->json(['status'=> $product_check->name.' Added to cart']);
                }
                
            }
        }else{
            return response()->json(['status'=>"Login to Continue"]);
        }
    }
    public function viewcart(){
        $cartItem=Cart::where('user_id',Auth::id())->get();
        return view('frontend.products.cart',compact('cartItem'));
    }
    public function deleteProduct(Request $request){
        if(Auth::check()){
            $product_id=$request->input('prod_id');
            if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                $cartItem=Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status'=>"Product Removed Successfully"]); 
            }
            $product_qty=$request->input('prod_qty');
        }else{
            return response()->json(['status'=>"Login to Continue"]); 
        }
    }
    public function updateProduct(Request $request){
        $product_id=$request->input('prod_id');
        $product_qty=$request->input('prod_qty');
        if(Auth::check()){
            if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
               $cart_item= Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
               $cart_item->prod_qty=$product_qty;
               $cart_item->update();
            }
        }else{
            return response()->json(['status'=>"Login to Continue"]); 
        }
    }
    public function cartcount(){
        $cart_count=Cart::where('user_id',Auth::id())->count();
        return response()->json(['code'=>$cart_count]);
    }
    public function finalproductprice(){
      $cartItem=Cart::where('user_id',Auth::id())->get();
       if($cartItem->count()>0){
            $total=0;
            foreach($cartItem as $cart){
               $total+=$cart->product->selling_price * $cart->prod_qty;
            }
         }
         return response()->json(['final_price'=>$total]);
   }
}
