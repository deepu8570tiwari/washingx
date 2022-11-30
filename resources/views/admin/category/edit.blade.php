@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4> Edit/Update Category</h4>
    </div>
    <div class="card-body">
       <form action="{{url('update-category/'.$category->id) }}" Method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">name</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">slug</label>
                <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
            </div>
           
            <div class="col-md-12 mb-3">
                <label for="">Description</label>
                <textarea name="description" row="3" class="form-control">{{$category->description}}"</textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">status</label>
                <input type="checkbox"  {{$category->status=="1" ? "checked" :''}} name="status">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">popular</label>
                <input type="checkbox" {{$category->popular=="1" ? "checked" :''}} name="popular">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Meta Title</label>
                <input type="text" class="form-control" name="meta_title" value="{{$category->meta_title}}">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Meta Description</label>
                <input type="text" class="form-control" name="meta_description" value="{{$category->meta_description}}">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Meta keyword</label>
                <input type="text" class="form-control" name="meta_keywords" value="{{$category->meta_keywords}}">
            </div>
            @if($category->image)
            <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="image" style="width:200px">
            @endif
            <div class="col-md-12">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="col-md-12">
                <button type="Submit" class="btn btn-primary">Edit category</button>
            </div>

        </div>

       </form>
    </div>
</div>
@endsection
