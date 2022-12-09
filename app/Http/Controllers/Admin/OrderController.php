<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(){
        $orders=Order::all();
        return view('admin.orders.index',compact('orders'));
    }
    public function pendingorder(){
        $orders=Order::where('id','0')->get();
        return view('admin.orders.pending',compact('orders'));
    }
    public function completedorder(){
        $orders=Order::where('id','1')->get();
        return view('admin.orders.completed',compact('orders'));
    }
    public function rejectedorder(){
        $orders=Order::where('id','2')->get();
        return view('admin.orders.rejected',compact('orders'));
    }
    
    public function vieworder($id){
        $orders=Order::where('id',$id)->first();
        return view('admin.orders.view',compact('orders'));
    }
    public function updateorder(Request $request,$id){
        $orders=Order::find($id);
        $orders->status=$request->input('order_status');
        $orders->update();
        return redirect('orders')->with('status','Order Updated Successfully');
    }
    public function orderhistory(){
        $orders=Order::all();
        return view('admin.orders.history',compact('orders'));
    }
}
