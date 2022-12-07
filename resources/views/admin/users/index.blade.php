@extends('layouts.admin')
@section('title')
Orders
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Registered Users
                </h4>
                <hr>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td><a href="{{url('view-user/'.$user->id)}}" class="btn btn-primary">View</a>
                                <a href="{{url('edit-user/'.$user->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('delete-user/'.$user->id)}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
