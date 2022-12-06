@extends('layouts.front')
    @section('title')
    My Order
    @endsection
    @section('content')
    <div class="py-3   border-top">
    <div class="container">
        <div class="mb-0">
            <a href="{{url('/')}}">
                Home
            </a>/
            <a href="{{url('/order-history')}}">
              Order history
            </a>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Order View
                            <a href="{{url('my-order')}}" class="btn btn-warning text-white float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Shipping Details</h5>
                                <label for="">First Name</label>
                                <div class="border p-2">{{$orders->fname}}</div>
                                <label for="">Last Name</label>
                                <div class="border p-2">{{$orders->lname}}</div>
                                <label for="">Email</label>
                                <div class="border p-2">{{$orders->email}}</div>
                                <label for="">Contact No</label>
                                <div class="border p-2">{{$orders->phone}}</div>
                                <label for="">Shipping Address</label>
                                <div class="border p-2">
                                    {{$orders->address1}},
                                    {{$orders->address2}},
                                    {{$orders->city}},
                                    {{$orders->state}},
                                    {{$orders->country}},
                                </div>
                                <label for="">Shipping Address</label>
                                <div class="border p-2">
                                    {{$orders->pincode}},
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>Order Details</h5>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders->orderItems as $order)
                                            <tr>
                                                <td>{{$order->products->name}}</td>
                                                <td>{{$order->prod_qty}}</td>
                                                <td>{{$order->prod_price}}</td>
                                                <td><img src="{{asset('assets/uploads/products/'.$order->products->image)}}" width="50px"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Grand Total: <span class="float-end">{{$orders->total_price}}</span></h4>
                                <h4 class="px-2">Payment Mode: {{$orders->payment_mode}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    @endsection