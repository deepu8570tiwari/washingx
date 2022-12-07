<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(){
        $category= Category::all();
        return view('admin.category.index',compact('category'));
    }
    public function add(){
        return view('admin.category.add');
    }
    public function insert(Request $request){
        
        $validatedData = $request->validate([
             'name' => 'required|max:255',
             'slug' => 'required|max:255',
             'description' => 'required',
             'status' => 'required',
             'popular' => 'required',
             'image'=>'required',
             'meta_title' => 'required|max:255',
             'meta_description' => 'required|max:255',
             'meta_keywords' => 'required|max:255',
         ]);
        $category= new Category();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/category',$filename);
            $category->image=$filename;
        }
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status') ==TRUE?'1':'0';
        $category->popular=$request->input('popular') ==TRUE?'1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_description=$request->input('meta_description');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->save();
        return redirect('/categories')->with('status','Your Category added successfully');
    }
    public function edit($id){
        $category= Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function update( Request $request, $id){
        $category =Category::find($id);
        if($request->hasFile('image')){
            $path="assets/uploads/category/".$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/category',$filename);
            $category->image=$filename;
        }
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status') ==TRUE?'1':'0';
        $category->popular=$request->input('popular') ==TRUE?'1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_description=$request->input('meta_description');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->update();
        return redirect('/categories')->with('status','Your Category updated successfully');
    }
    public function destroy($id){
        $category=Category::find($id);
        if($category->image){
            $path="assets/uploads/category/".$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('/categories')->with('status','Category deleted successfully');
    }
}
