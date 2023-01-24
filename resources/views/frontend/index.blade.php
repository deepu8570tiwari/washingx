@extends('layouts.front')
    @section('title')
        Welcome To Washing Basket
    @endsection
    @section('content')
    @include('layouts.inc.slider')
    <div class="shopping-cart-section">
        <div class="container mt-5">
            <div class="row">
                <!--<div class="col-lg-6">
                    <div id="carouselExampleIndicators" class="py-3 carousel slide product-slider" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{url('assets/images')}}/12.png" class="img-fluid" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('assets/images')}}/12.png" class="img-fluid" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('assets/images')}}/12.png" class="img-fluid" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>-->
                <div class="col-lg-12 text-center">
                    <div class="products-detail">
                        <h2 class="mb-4 fonts-weight-bold">What do you want to iron?</h2>
                        <div class="product-top-image">
                            <img src="{{url('assets/images')}}/1.png" class="img-fluid" />
                        </div>
                        <div class="product-listing my-5 ">
                            <div class="row m-0">
                                @foreach($featured_products as $categories)
                                <div class="col-md-4">
                                    <div class="add-product-main product_data">
                                        <button class="btn-quantity minus changeQuantity decreament-value">
                                            <i class="fas fa-minus "></i>
                                        </button>
                                        <div class="p-item">
                                            <img src="{{url('assets/uploads/products')}}/{{$categories->image}}" class="product-small-image" />
                                            <div class="product_price">
                                                <span class="product-name">{{$categories->Category->name}}</span>
                                                <span class="product-price">₹ {{$categories->selling_price}}</span>
                                            </div>
                                            <div class="quantity-text">
                                                <input type="text" value="0" name="quantity" class="current_quantity qty-input">
                                            </div>
                                        </div>
                                        <button class="btn-quantity plus changeQuantity increament-btn">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                        <input type="hidden" value="{{$categories->id}}" class="prod_id">
                                        <input type="hidden" class="quantity_field" name="quantity" data-price="" value="0">
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-md-4">
                                    <div class="add-product-main">
                                        <div class="p-item">
                                            <img src="{{url('assets/images')}}/img1.png" class="product-small-image" />
                                            <div class="product_price">
                                                <span class="product-name">Others</span>
                                                <span class="product-price" ><i class="fas fa-plus"></i></span>
                                            </div>
                                             <div class="quantity-text">
                                                <input type="text" value="0" name="quantity" class="current_quantity qty-input"  style="visibility:hidden">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-checkout-button mb-3">
                            @if($cartItem->count()>0)
                             @php $total=0; @endphp
                                @foreach($cartItem as $cart)
                                @php $total+=$cart->product->selling_price * $cart->prod_qty; @endphp
                                @endforeach
                                <a href="#" class="checkout_btn btn"><i class="fa fa-shopping-cart"></i><span class="final_price">CheckOut <b>₹ {{$total}}</b></span></a>
                            @else
                            <a href="#" class="checkout_btn btn"><i class="fa fa-shopping-cart"></i><span class="final_price">CheckOut <b></b></span></a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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