<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;



class ProductController extends Controller
{
    public function index(){
        $product=Product::all();
        return view('admin.products.index',compact('product'));
    }
    public function add(){
        $category=Category::all();
        return view('admin.products.add',compact('category'));
    }
    public function insert(Request $request){
        $validatedData = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'slug' => 'required|max:255',
            'short_description' => 'required|max:255',
            'description' => 'required',
            'original_price' => 'required|max:255',
            'selling_price' => 'required',
            'qty' => 'required',
            'tax' => 'required',
            'status' => 'required',
            'trending' => 'required',
            'image'=>'required',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required|max:255',
            'meta_keywords' => 'required|max:255',
        ]);
        $products= new Product();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/products',$filename);
            $products->image=$filename;
        }
        $products->category_id=$request->input('category_id');
        $products->name=$request->input('name');
        $products->slug=$request->input('slug');
        $products->short_description=$request->input('short_description');
        $products->description=$request->input('description');
        $products->original_price=$request->input('original_price');
        $products->selling_price=$request->input('selling_price');
        $products->qty=$request->input('qty');
        $products->tax=$request->input('tax');
        $products->status=$request->input('status') ==TRUE?'1':'0';
        $products->trending=$request->input('trending') ==TRUE?'1':'0';
        $products->meta_title=$request->input('meta_title');
        $products->meta_description=$request->input('meta_description');
        $products->meta_keywords=$request->input('meta_keywords');
        $products->save();
        return redirect('/products')->with('status','Your products added successfully');
    }
    public function edit($id){
        $product_listing=Product::find($id);
        $category = Category::all();
        return view('admin.products.edit',compact('product_listing','category'));
    }
    public function update(Request $request, $id){
        $products =Product::find($id);
        if($request->hasFile('image')){
            $path="assets/uploads/products/".$products->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/products',$filename);
            $Product->image=$filename;
        }
        $products->name=$request->input('name');
        $products->slug=$request->input('slug');
        $products->short_description=$request->input('short_description');
        $products->description=$request->input('description');
        $products->original_price=$request->input('original_price');
        $products->selling_price=$request->input('selling_price');
        $products->qty=$request->input('qty');
        $products->tax=$request->input('tax');
        $products->status=$request->input('status') ==TRUE?'1':'0';
        $products->trending=$request->input('trending') ==TRUE?'1':'0';
        $products->meta_title=$request->input('meta_title');
        $products->meta_description=$request->input('meta_description');
        $products->meta_keywords=$request->input('meta_keywords');
        $products->update();
        return redirect('/products')->with('status','Your Product updated successfully');
    }
    public function destroy($id){
        $category=Product::find($id);
        if($category->image){
            $path="assets/uploads/products/".$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('/products')->with('status','Products deleted successfully');
    }
}
