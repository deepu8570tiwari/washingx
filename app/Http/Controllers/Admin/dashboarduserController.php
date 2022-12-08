<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboarduserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
    public function viewuser($id){
        //echo $id.'dfdsfsdgd';
        $users=User::find($id);
        return view('admin.users.view',compact('users'));
    }
    public function edituser($id){
        //echo $id.'dfdsfsdgd';
        $users=User::find($id);
        return view('admin.users.edit',compact('users'));
    }
    public function updateuser(Request $request, $id){
        $users=User::find($id);
        $users->name=$request->input('firstname');
        $users->lname=$request->input('lastname');
        $users->email=$request->input('email');
        $users->phone=$request->input('phone');
        $users->address1=$request->input('address1');
        $users->address2=$request->input('address2');
        $users->city=$request->input('city');
        $users->state=$request->input('state');
        $users->country=$request->input('country');
        $users->update();
        return redirect('/users')->with('status','Admin update user successfully');
    }
    public function destroyuser($id){
        $users=User::find($id);
        $users->delete();
        return redirect('/users')->with('status','User deleted successfully');
    }
    
}
