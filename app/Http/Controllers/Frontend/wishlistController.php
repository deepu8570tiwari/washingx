<?php

namespace App\Http\Controllers\Frontend;

use App\Models\product;
use App\Models\wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class wishlistController extends Controller
{
    public function index(){
        $wishlist = wishlist::where('user_id', Auth::id())->get();
        return view('frontend.wishlist',compact('wishlist'));
    }
    public function addtowishlist(Request $request){
        if(Auth::check()){
            $prod_id=$request->input('product_id');
            if(product::find($prod_id)){
                $wishlist= new wishlist();
                $wishlist->prod_id=$prod_id;
                $wishlist->user_id=Auth::id();
                $wishlist->save();
                return response()->json(['status'=>'Product Added to successfully in your wishlist']);
            }else{
                return response()->json(['status'=>'Product not Exist']);
            }
        }else{
            return response()->json(['status'=>'Login to continue']);
        }
    }
    public function deletetowishlist(Request $request){
        if(Auth::check()){
            $product_id=$request->input('prod_id');
            if(wishlist::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                $wishlist=wishlist::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
                $wishlist->delete();
                return response()->json(['status'=>"Wishlist product Removed Successfully"]); 
            }
        }else{
            return response()->json(['status'=>"Login to Continue"]); 
        }
    }
    public function wishlistcount(){
        $countwishlist=wishlist::where('user_id',Auth::id())->count();
        return response()->json(['code'=>$countwishlist]);
    }
}
