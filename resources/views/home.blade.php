@extends('layouts.front')
@section('title')
        Home
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured products</h2>
                <div class="owl-carousel owl-theme">
                    @foreach($featured_products as $product)
                    <div class="item">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('assets/uploads/products/'.$product->image)}}" alt="Product image" >
                                </div>
                                <div class="card-body">
                                <h5>{{$product->name}} </h5>
                                <span class="float-start">{{$product->selling_price}}</span>
                                <span class="float-end"><s>{{$product->original_price}}</s></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending products</h2>
                <div class="owl-carousel owl-theme">
                    @foreach($featured_category as $category)
                    <div class="item">
                        <a href="{{url('view-category',$category->slug)}}">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="Product image" >
                                    </div>
                                    <div class="card-body">
                                    <h5>{{$category->name}} </h5>
                                    <p>{{$category->description}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@include('layouts.front-footer')
<!-- Footer -->
@endsection
