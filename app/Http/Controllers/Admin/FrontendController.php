<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function index(){

        $total_user=User::count();
        $today_user = User::whereDate('created_at', Carbon::today())->get();
        $today_user_count=count($today_user);
        return view('admin.index',compact('total_user','today_user_count'));
        
    }
}
