@extends('layouts.front')
    @section('title')
    {{$products->name}}
    @endsection
    @section('content')
    <!-- Button trigger modal -->


<!-- Modal -->

    <div class="py-3 shadow-sm bg-warning border-top">
        <div class="container">
            <div class="mb-0">
                Collections/ {{$products->category->name}}/ {{$products->name}}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{asset('assets/uploads/products/'.$products->image)}}" class="w-100" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{$products->name}}
                            @if($products->trending=="1")
                            <label style="font-size:16px;" class="float-end badge bg-danger trending_tag">Trending</label>
                            @endif
                        </h2>
                        <hr>
                        <label class="me-3">Original Price :<s>Rs:{{$products->original_price}}</s></label>
                        <label class="fw-bold">Selling Price :<b>Rs:{{$products->selling_price}}</b></label>
                        <p class="mt-3">
                            {{$products->short_description}}
                        </p>
                        
                        <hr>
                        @if($products->qty>0)
                            <label class="badge bg-success">In Stock</label>
                        @else
                            <label class="badge bg-danger">Out Stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <input type="hidden" value="{{$products->id}}" class="prod_id">
                                <label for="quantity">Quantity</label>
                                <div class="input-group text-center mb-3">
                                    <button class="input-group-text decreament-value">-</button>
                                    <input type="text" name="quantity" value="1" class="form-control qty-input">
                                    <button class="input-group-text increament-btn">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <button type="button" class="btn btn-success me-3 Addtowishlist float-start">Add to Wishlist <i class="fa fa-heart"></i></button>
                            
                            @if($products->qty>0)
                            <button type="button" class="btn btn-primary me-3 AddtoCartBtn float-start">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                            @else
                            @endif
                        
                       
                        </div>
                    </div>
                    
                    <div class="com-md-12">
                    <hr>
                    <h4><b>Description</b></h4>
                        {{$products->description}}
                    </div>
                    
                    
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 ">
                <button id="previewFormattedSchedules" class="sp-btn-size lsc-btn-adjust btn float-end btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalcontainer">Rating {{$products->name}}</button>
                
                </div>
            </div>
            <hr>
        </div>
        
    </div>
    
 
<div class="modal fade" id="modalcontainer" tabindex="-1" aria-labelledby="modalcontainer" aria-hidden="true">
  <div class="modal-dialog ">
  <form action="{{url('add-rating')}}" method="post">
  @csrf
    <div class="modal-content">
        <input type="hidden" name="product_id" value="{{$products->id}}">
        <div class="modal-header">
            <h5 class="modal-title">{{$products->name}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="star-icon">
                <div class="rate">
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star5" title="text">1 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star4" title="text">2 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star2" title="text">4 stars</label>
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star1" title="text">5 star</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </form>
  </div>
</div> 
    @endsection

    @section('scripts')
    <script>
        
    </script>
    @endsection
