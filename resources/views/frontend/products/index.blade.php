@extends('layouts.front')
    @section('title')
    {{$category->name}}
    @endsection
    @section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>{{$category->name}}</h2>
               
                    @foreach($product as $products)
                    <div class="col-md-3">
                        <div class="card">
                            <a href="{{url('category/'.$category->slug.'/'.$products->slug)}}">
                                <div class="card-img">
                                    <img src="{{asset('assets/uploads/products/'.$products->image)}}" alt="Product image" >
                                    </div>
                                    <div class="card-body">
                                    <h5>{{$products->name}} </h5>
                                    <span class="float-start">{{$products->selling_price}}</span>
                                    <span class="float-end"><s>{{$products->original_price}}</s></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                
            </div>
        </div>
    </div>
    @endsection