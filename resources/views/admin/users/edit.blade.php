@extends('layouts.admin')
@section('title')
Update User Profile
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Update User Profile
                </h4>
                <hr>
            </div>
            <div class="card-body" id="user_data">
            <form action="{{url('update-user/'.$users->id) }}" Method="POST">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">First Name:</label>
                            <input type="text" value="{{$users->name}}" name ="firstname" class="p-2 border">
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Last Name:</label>
                            <input type="text" value="{{$users->lname}}" name ="lastname" class="p-2 border">
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Email:</label>
                            <input type="text" value="{{$users->email}}" name ="email" class="p-2 border" readonly>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Phone: </label>
                            <input type="text" value="{{$users->phone}}" name ="phone" class="p-2 border">
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Address 1:</label>
                            <input type="text" value="{{$users->address1}}" name ="address1" class="p-2 border">
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Address 2:</label>
                            <input type="text" value="{{$users->address2}}" name ="address2" class="p-2 border">
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">City :</label>
                            <input type="text" value="{{$users->city}}" name ="city" class="p-2 border">
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">State :</label>
                            <input type="text" value="{{$users->state}}" name ="state" class="p-2 border">
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Country :</label>
                            <input type="text" value="{{$users->country}}" name ="country" class="p-2 border">
                        </div>
                        <div class="col-md-12 mt-3">
                            <button type="submit " class="p-2 btn btn-danger  float-end">Update User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
