@extends('layouts.front')
    @section('title')
       My Wishlist
    @endsection
    @section('content')
    <div class="py-3 shadow-sm bg-warning border-top">
        <div class="container">
            <div class="mb-0">
                <a href="{{url('/')}}">
                    Home
                </a>/
                <a href="{{url('/wishlist')}}">
                    wishlist
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card shadow mt-3">
            <div class="card-body">
            @if($wishlist->count()>0)
            <div class="card-body">
              
                @foreach($wishlist as $cart)
                <div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{asset('assets/uploads/products/'.$cart->product->image)}}" class="w-100" alt="" height="70px" width="70px">
                    </div>
                    <div class="col-md-2 my-auto">
                        <h6>{{$cart->product->name}}</h6>
                    </div>
                    <div class="col-md-2 my-auto">
                        <h6>Rs {{$cart->product->selling_price}}</h6>
                    </div>
                    <div class="col-md-2 my-auto">
                        <input type="hidden" value="{{$cart->prod_id}}" class="prod_id">
                        @if($cart->product->qty >= $cart->prod_qty)
                        <label for="quantity">Quantity</label>
                        <div class="input-group text-center mb-3" style="width:130px">
                            <button class="input-group-text  decreament-value">-</button>
                            <input type="text" name="quantity" value="1" class="form-control qty-input text-center">
                            <button class="input-group-text  increament-btn">+</button>
                        </div>
                        @else
                        <h6>Out of Stock</h6>
                        @endif
                    </div>
                    <div class="col-md-2  my-auto">
                        <button class="btn btn-success AddtoCartBtn"><i class="fa fa-shopping-cart"></i> Add to Cart</h3>
                    </div>
                    <div class="col-md-2  my-auto">
                        <button class="btn btn-danger remove-wishlist-item"><i class="fa fa-trash"></i> Remove</h3>
                    </div>
                </div>
              
                @endforeach
            </div>
            @else
                <h4>There are no products in your wishlist</h4>
            @endif
            </div>
         </div>
    </div>
    @endsection