@extends('layouts.front')
@section('title')
        Home
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="shopping-cart-section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
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
                </div>
                <div class="col-lg-6 text-center">
                    <div class="products-detail">
                        <h2 class="mb-4 fonts-weight-bold">What do you want to iron?</h2>
                        <div class="product-top-image">
                            <img src="{{url('assets/images')}}/1.png" class="img-fluid" />
                        </div>
                        <div class="product-listing my-5">
                            <div class="row m-0">
                                <div class="col-md-6">
                                    <div class="add-product-main">
                                        <a href="#" class="btn-quantity minus">
                                            <i class="fas fa-minus"></i>
                                        </a>
                                        <div class="p-item">
                                            <img src="{{url('assets/images')}}/img1.png" class="product-small-image" />
                                            <span class="product-name">T - Shirt</span>
                                            <div class="quantity-text">
                                                <span class="current_quantity">0</span>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-quantity plus">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <input type="hidden" class="quantity_field" name="quantity" data-price="8.50" value="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="add-product-main">
                                        <a href="#" class="btn-quantity minus">
                                            <i class="fas fa-minus"></i>
                                        </a>
                                        <div class="p-item">
                                            <img src="{{url('assets/images')}}/img1.png" class="product-small-image" />
                                            <span class="product-name">T - Shirt</span>
                                            <div class="quantity-text">
                                                <span class="current_quantity">0</span>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-quantity plus">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <input type="hidden" class="quantity_field" name="quantity" data-price="8.50" value="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="add-product-main">
                                        <a href="#" class="btn-quantity minus">
                                            <i class="fas fa-minus"></i>
                                        </a>
                                        <div class="p-item">
                                            <img src="{{url('assets/images')}}/img1.png" class="product-small-image" />
                                            <span class="product-name">T - Shirt</span>
                                            <div class="quantity-text">
                                                <span class="current_quantity">0</span>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-quantity plus">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <input type="hidden" class="quantity_field" name="quantity" data-price="8.50" value="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="add-product-main">
                                        <a href="#" class="btn-quantity minus">
                                            <i class="fas fa-minus"></i>
                                        </a>
                                        <div class="p-item">
                                            <img src="{{url('assets/images')}}/img1.png" class="product-small-image" />
                                            <span class="product-name">T - Shirt</span>
                                            <div class="quantity-text">
                                                <span class="current_quantity">0</span>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-quantity plus">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <input type="hidden" class="quantity_field" name="quantity" data-price="8.50" value="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="add-product-main">
                                        <a href="#" class="btn-quantity minus">
                                            <i class="fas fa-minus"></i>
                                        </a>
                                        <div class="p-item">
                                            <img src="{{url('assets/images')}}/img1.png" class="product-small-image" />
                                            <span class="product-name">T - Shirt</span>
                                            <div class="quantity-text">
                                                <span class="current_quantity">0</span>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-quantity plus">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <input type="hidden" class="quantity_field" name="quantity" data-price="8.50" value="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="add-product-main">
                                        <a class="p-item" href="#">
                                            <img src="{{url('assets/images')}}/img1.png" class="product-small-image" />
                                            <span class="product-name">Other</span>
                                        </a>
                                        <input type="hidden" class="quantity_field" name="quantity" data-price="8.50" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-checkout-button mb-3">
                            <a href="#" class="checkout_btn btn"><i class="fas fa-plus"></i><span>Check out</span></a>
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
                <h2>Trending Services</h2>
                <div class="">
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
