@extends('layouts.admin')
@section('title')
Orders
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>All Order
                    <a href="{{url('orders/completed-orders')}}" class="btn btn-success float-end">Completed Order</a>
                    <a href="{{url('orders/rejected-orders')}}" class="btn btn-danger float-end">Rejected</a>
                    <a href="{{url('orders/pending-orders')}}" class="btn btn-warning float-end "> Pending</a>
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
                            <th>Change Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{date('d-M-y',strtotime($order->created_at))}}</td>
                                <td>{{$order->tracking_no}}</td>
                                <td>{{$order->total_price}}</td>
                                <td>{{$order->status== "0" ? 'Pending' : ($order->status=="1"  ? 'Completed' :  ($order->status=="2" ? "Reject" :'Out Of Stock'))}}</td>
                                <td><a href="{{url('admin/view-order/'.$order->id)}}" class="btn btn-primary">Change Order Status</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
