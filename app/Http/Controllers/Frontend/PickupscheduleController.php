<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Emailcontact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PickupscheduleController extends Controller
{
    public function washingpickupschedule(Request $request){
        //print_r($_POST);
        /*$request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'telephone' => 'required|numeric|digits:10',
            'address' => 'required|max:500',
            'date' => 'required|date_format:Y-m-d H:i:s|after_or_equal:today',
            'time'=>'required|date_format:H:i',
        ]);
        $email=Emailcontact::create($request->all());
       return view('emails.email');
        dd('sss');*/
       // return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}

