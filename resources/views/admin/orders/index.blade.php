@extends('layouts.admin')
@section('title')
Orders
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>New Order
                    <a href="{{url('order-history')}}" class="btn btn-warning float-end">Order History</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Order Date</th>
                            <th>Tracking Order</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{date('d-M-y',strtotime($order->created_at))}}</td>
                                <td>{{$order->tracking_no}}</td>
                                <td>{{$order->total_price}}</td>
                                <td>{{$order->status=="0"?'Pending':'Completed'}}</td>
                                <td><a href="{{url('admin/view-order/'.$order->id)}}" class="btn btn-primary">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
