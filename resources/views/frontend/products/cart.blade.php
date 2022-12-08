@extends('layouts.front')
    @section('title')
        Cart
    @endsection
    @section('content')
    <div class="py-3   border-top">
        <div class="container">
            <div class="mb-0">
                <a href="{{url('/')}}">
                    Home
                </a>/
                <a href="{{url('/cart')}}">
                    Cart
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card shadow mt-3">
            @if($cartItem->count()>0)
            <div class="card-body ">
                @php $total=0; @endphp
                @foreach($cartItem as $cart)
                <div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{asset('assets/uploads/products/'.$cart->product->image)}}" class="w-100" alt="" height="70px" width="70px">
                    </div>
                    <div class="col-md-3 my-auto">
                        <h6>{{$cart->product->name}}</h6>
                    </div>
                    <div class="col-md-2 my-auto">
                        <h6>Rs {{$cart->product->selling_price}}</h6>
                    </div>
                    <div class="col-md-3 my-auto">
                        <input type="hidden" value="{{$cart->prod_id}}" class="prod_id">
                        @if($cart->product->qty >= $cart->prod_qty)
                        <label for="quantity">Quantity</label>
                        <div class="input-group text-center mb-3" style="width:130px">
                            <button class="input-group-text changeQuantity decreament-value">-</button>
                            <input type="text" name="quantity" value="{{$cart->prod_qty}}" class="form-control qty-input text-center">
                            <button class="input-group-text changeQuantity increament-btn">+</button>
                        </div>
                        @php $total+=$cart->product->selling_price * $cart->prod_qty; @endphp
                        @else
                        <h6>Out of Stock</h6>
                        @endif
                    </div>
                    <div class="col-md-2  my-auto">
                        <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i> Remove</h3>
                    </div>
                </div>
                <hr>
              
                @endforeach
            </div>
            <div class="card-body">
                <div class="cart-footer">
                    <div class="row ">
                        <div class="col-md-6  my-auto">
                            <h6>Total: Rs {{$total}}</h6>
                        </div>
                        <div class="col-md-6 my-auto">
                            <a href="{{url('checkout')}}" class="btn btn-danger btn-outline success float-end"> Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
                @else
                <div class="card-body text-center ">
                    <h2>Your cart is Empty</h2>
                    <a href="{{url('/')}}" class="btn btn-outline-primary float-end"> Continue Shopping</a>
                </div>
                @endif
            </div>
         </div>
    </div>
    @include('layouts.front-footer')
    @endsection