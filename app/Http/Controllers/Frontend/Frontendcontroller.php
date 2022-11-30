<?php

namespace App\Http\Controllers\frontend;
use App\Models\Product;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
   public function index(){
      $featured_products=Product::where('trending','1')->take('15')->get();
      $featured_category=Category::where('popular','1')->take('15')->get();
      return view('frontend.index',compact('featured_products','featured_category'));
   }
   public function category(){
      $category=Category::where('status','0')->get();
      return view('frontend.category',compact('category'));
   }
   public function viewcategory($slug){
      if(Category::where('slug',$slug)->exists()){
         $category=Category::where('slug',$slug)->first();
         $product=Product::where('category_id',$category->id)->where('status','0')->get();
         return view('frontend.products.index',compact('product','category'));
      }else{
         return redirect('/')->with('status','Slug not exist');
      }
   }
   public function productview($cat_slug,$prod_slug){
      if(Category::where('slug',$cat_slug)->exists()){
         if(Product::where('slug',$prod_slug)->exists()){
            $products=Product::where('slug',$prod_slug)->first();
            return view('frontend.products.view',compact('products'));
         }else{
            return redirect('/')->with('status','The link is Broken');
         }
      }else{
         return redirect('/')->with('status','No such category');
      }
   }
   public function users(){
      
   }
   public function aboutus(){

      return view('frontend.about');

   }
   public function service(){

      return view('frontend.service');

   }
   public function washingfaq(){

      return view('frontend.faq');

   }
   public function washingpricing(){

      return view('frontend.pricing');

   }
   public function washingpickup(){

      return view('frontend.pickup');

   }
}
