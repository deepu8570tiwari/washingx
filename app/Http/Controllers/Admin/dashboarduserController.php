<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

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
}
