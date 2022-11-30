@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4> Edit/Update Product</h4>
    </div>
    <div class="card-body">
       <form action="{{url('update-product/'.$product_listing->id) }}" Method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <select class="form-select" name="category_id" id="">
                        @foreach ($category as $cat)
                            <option value="{{$cat->id}}" {{ $product_listing->category_id==$cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">name</label>
                <input type="text" class="form-control" name="name" value="{{$product_listing->name}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">slug</label>
                <input type="text" class="form-control" name="slug" value="{{$product_listing->slug}}">
            </div>
           
            <div class="col-md-6 mb-3">
                <label for="">Short Description</label>
                <textarea name="short_description" row="3" class="form-control" >{{$product_listing->short_description}}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Description</label>
                <textarea name="description" row="3" class="form-control">{{$product_listing->description}}</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Original price</label>
                <input type="text" class="form-control" name="original_price" value="{{$product_listing->original_price}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Selling price</label>
                <input type="text" class="form-control" name="selling_price" value="{{$product_listing->selling_price}}">
            </div>
            @if($product_listing->image)
            <img src="{{asset('assets/uploads/products/'.$product_listing->image)}}" alt="image" style="width:200px">
            @endif
            <div class="col-md-12">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Item qty</label>
                <input type="number" class="form-control" name="qty" value="{{$product_listing->qty}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Item Tax</label>
                <input type="number" class="form-control" name="tax" value="{{$product_listing->tax}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">status</label>
                <input type="checkbox"  name="status" {{$product_listing->status=="1"?"checked":""}}>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Trending</label>
                <input type="checkbox" name="trending" {{$product_listing->trending=="1"? "checked" :"";}}>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Meta Title</label>
                <input type="text" class="form-control" name="meta_title" value="{{$product_listing->meta_title}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Meta Description</label>
                <input type="text" class="form-control" name="meta_description" value="{{$product_listing->meta_description}}">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Meta keyword</label>
                <input type="text" class="form-control" name="meta_keywords" value="{{$product_listing->meta_keywords}}">
            </div>
            
            <div class="col-md-12">
                <button type="Submit" class="btn btn-primary">Edit Product</button>
            </div>

        </div>


       </form>
    </div>
</div>
@endsection
