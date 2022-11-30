@extends('layouts.front')
    @section('title')
    My Order
    @endsection
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4>My Order</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tracking Order</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->tracking_no}}</td>
                                        <td>{{$order->total_price}}</td>
                                        <td>{{$order->status=="0"?'Pending':'Completed'}}</td>
                                        <td><a href="{{url('view-order/'.$order->id)}}" class="btn btn-primary">View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    @endsection