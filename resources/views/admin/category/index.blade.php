@extends('layouts.admin')
@section('title')
    Add Categories
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Categories</h4> 
        <a  href="{{url('/add-category')}}" class="btn btn-danger float-end">Add New Category</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
            @foreach($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->slug}}</td>
                    <td>{{$item->description}}</td>
                    <td><img src="{{ asset('assets/uploads/category/'.$item->image)}}" alt="image" class="w-25"></td>
                    <td><a href="{{url('edit-prod/'.$item->id)}}" class="btn btn-primary">Edit</a><a href="{{url('delete-category/'.$item->id)}}"class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>

        </table>
        
    </div>
</div>
@endsection
