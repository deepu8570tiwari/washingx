@extends('layouts.admin')
@section('title')
Orders
@endsection
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Order View
                            <a href="{{url('orders')}}" class="btn btn-warning text-white float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
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
                                <h4 class="px-2">Grand Total:<span class="float-end">Rs: {{$orders->total_price}}</span></h4>
                                <label>Order Status</label>
                                @if($orders->status=='1')
                                <h6 style="color:red;">This Order has been completed no further action is required</h6>
                                @else
                                <form action="{{url('update-order/'.$orders->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="order_status" id="" class="form-select" >
                                        <option {{$orders->status=='0' ? 'selected':''}} value="0">Pending</option>
                                        <option {{$orders->status=='1' ? 'selected':''}} value="1">Completed</option>
                                        <option {{$orders->status=='2' ? 'selected':''}} value="2">Rejected</option>
                                        <option {{$orders->status=='3' ? 'selected':''}} value="3">Out of Stock</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary mt-3 float-end">Update</button>
                                </form>
                               
                               @endif
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection
