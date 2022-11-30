<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Rating;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function add(Request $request){
        $product_id= $request->input('product_id');
        $rating_value= $request->input('rate');
        $productexist=product::where('id',$product_id)->where('status','0')->first();
        if($productexist){
            $verified_is_purchased=Order::where('orders.user_id',Auth::id())
            ->join('order_items','orders.id','order_items.order_id')
            ->where('order_items.prod_id',$product_id)->get();
            if($verified_is_purchased){
                $existing_rating=Rating::where('user_id',Auth::id())->where('prod_id',$product_id)->first();
                if($existing_rating){
                    $existing_rating->star_rated=$rating_value;
                    $existing_rating->update();
                }else{
                    Rating::create([
                        'user_id'=>Auth::id(),
                        'prod_id'=>$product_id,
                        'star_rated'=>$rating_value,
                    ]);
                }
                return redirect()->back()->with('status','Thank you for rating this products');
            }else{
                return redirect()->back()-with('status','Before rating you have to Purchased this products');
            }
        }else{
            return redirect()->back()-with('status','Before rating you have to Purchased this products');
        }
    }
}
