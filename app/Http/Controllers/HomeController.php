<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $featured_products=Product::where('trending','1')->take('15')->get();
        $featured_category=Category::where('popular','1')->take('15')->get();
        return view('home',compact('featured_products','featured_category'));
        //return view('home');
    }
}
