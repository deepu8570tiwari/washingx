@extends('layouts.admin')
@section('title')
Completed Orders
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Completed Orders
                    <a href="{{url('order-history')}}" class="btn btn-success float-end"> Order History</a>
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
                            
                        </tr>
                    </thead>
                    <tbody>
                    @if($orders->count()>0)
                        @foreach($orders as $order)
                            <tr>
                                <td>{{date('d-M-y',strtotime($order->created_at))}}</td>
                                <td>{{$order->tracking_no}}</td>
                                <td>{{$order->total_price}}</td>
                                <td>{{$order->status== "1" ? 'Completed' :  'Rejected'}}</td>
                               
                            </tr>
                        @endforeach
                    @else
                    <tr>
                        <td>There is no Completed Orders</td>
                    </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
