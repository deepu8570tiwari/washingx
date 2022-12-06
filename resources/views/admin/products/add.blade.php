@extends('layouts.admin')
@section('title')
    Products
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4> Add Products</h4>
        <a  href="{{url('/products')}}" class="btn btn-danger float-end">View Products</a>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card-body">
       <form action="{{url('insert-products') }}" Method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <select name="category_id" id="" class="form-control">
                <option value="">Select any catgeory</option>
                @foreach($category as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>
                @endforeach
                  
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">slug</label>
                <input type="text" class="form-control" name="slug">
            </div>
           
            <div class="col-md-6 mb-3">
                <label for="">Short Description</label>
                <textarea name="short_description" row="3" class="form-control"></textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Description</label>
                <textarea name="description" row="3" class="form-control"></textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Original price</label>
                <input type="text" class="form-control" name="original_price">
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Selling price</label>
                <input type="text" class="form-control" name="selling_price">
            </div>
            <div class="col-md-12">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Item qty</label>
                <input type="number" class="form-control" name="qty">
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Item Tax</label>
                <input type="number" class="form-control" name="tax">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">status</label>
                <input type="checkbox"  name="status">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Trending</label>
                <input type="checkbox" name="trending">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Meta Title</label>
                <input type="text" class="form-control" name="meta_title">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Meta Description</label>
                <input type="text" class="form-control" name="meta_description">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Meta keyword</label>
                <input type="text" class="form-control" name="meta_keywords">
            </div>
            
            <div class="col-md-12">
                <button type="Submit" class="btn btn-primary">Add Product</button>
            </div>

        </div>

       </form>
    </div>
</div>
@endsection
