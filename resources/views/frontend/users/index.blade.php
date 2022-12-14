@extends('layouts.front')
@section('title')
Edit Profile
@endsection
@section('content')
<div class="py-3   border-top">
        <div class="container">
            <div class="mb-0">
                <a href="{{url('/')}}">
                    Home
                </a>/
                <a href="{{url('/my-profile')}}">
                    Profile
                </a>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Profile Details
                       
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <label for="">First Name:</label>
                            <div class="p-2 border">{{$users->name}}</div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Last Name:</label>
                            <div class="p-2 border">{{$users->lname}}</div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Email:</label>
                            <div class="p-2 border">{{$users->email}}</div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Phone: </label>
                            <div class="p-2 border">{{$users->phone}}</div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Address 1:</label>
                            <div class="p-2 border">{{$users->address1}}</div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Address 2:</label>
                            <div class="p-2 border">{{$users->address2}}</div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">City :</label>
                            <div class="p-2 border">{{$users->city}}</div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">State :</label>
                            <div class="p-2 border">{{$users->state}}</div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Country :</label>
                            <div class="p-2 border">{{$users->country}}</div>
                        </div>
                        
                    </div>
                    <div class="col-md-12 mt-3 btn-content">
                            <a href="{{url('/my-profile/'.$users->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('/delete-profile/'.$users->id)}}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.front-footer')
@endsection
