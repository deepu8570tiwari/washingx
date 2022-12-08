<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $orders= Order::where('user_id',Auth::id())->get();
        return view('frontend.orders.index',compact('orders'));
    }
    public function vieworder($id){
        $orders= Order::where('id',$id)->where('user_id',Auth::id())->first();
        return view('frontend.orders.view',compact('orders'));
    }
    public function viewuser(){
        $users=User::find(Auth::id());
        return view('frontend.users.index',compact('users'));
    }
    public function edituser($id){
        $users=User::find($id);
        return view('frontend.users.edit',compact('users'));
    }
    public function updateuser(Request $request, $id){
        $user_profile=User::find($id);
        $user_profile->name=$request->input('firstname');
        $user_profile->lname=$request->input('lastname');
        $user_profile->email=$request->input('email');
        $user_profile->phone=$request->input('phone');
        $user_profile->address1=$request->input('address1');
        $user_profile->address2=$request->input('address2');
        $user_profile->city=$request->input('city');
        $user_profile->state=$request->input('state');
        $user_profile->country=$request->input('country');
        $user_profile->update();
        return redirect('/my-profile')->with('status','Your Profile updated successfully');

    }
    public function destroyuser($id){
        $deleteuser= User::find($id);
        $deleteuser->delete();
        return redirect('/my-profile')->with('status','User deleted successfully');
    }
}
