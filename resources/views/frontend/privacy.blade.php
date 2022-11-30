@extends('layouts.front')
@section('title')
        Our Services
    @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
             <h2 style="text-align:center">Our Best Services For You</h2>
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-md-6 wow fadeInUp" style="visibility: visible;">
                    <div class="service-each shadow-2 mb-30 transition-4 text-center">
                        <a href="" class="black">
                            <div class="service-icn bg-light-white flex-center">
                                <img src="img/service/1.png" alt="">
                            </div>
                            <div class="service-text">
                                <h3 class="fs-20 f-700 mb-10">WASH &amp; FOLD</h3>
                                <p class="mb-0">48 hrs Turnaround time
                                    Wash &amp; Dry
                                    Stain Removal
                                    Cuff &amp; Collar Cleaning
                                    Fabric Conditioner
                                    Eco Friendly Combined Packing
                                    Doorstep Pickup &amp; Delivery</p>
                                <span class="line-servcie transition-4 bg-blue mt-5"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
                    <div class="service-each shadow-2 mb-30 transition-4 text-center">
                        <a href="" class="black">
                            <div class="service-icn bg-light-white flex-center">
                                <img src="img/service/2.png" alt="">
                            </div>
                            <div class="service-text">
                                <h3 class="fs-20 f-700 mb-10">WASH &amp; IRON</h3>
                                <p class="mb-0">48 hrs Turnaround time
                                    Wash, Dry &amp; Steam Ironing
                                    Stain Removal
                                    Cuff &amp; Collar Cleaning
                                    Fabric Conditioner
                                    Eco Friendly Combined Packing
                                    Doorstep Pickup &amp; Delivery</p>
                                <span class="line-servcie transition-4 bg-blue mt-5"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s;">
                    <div class="service-each shadow-2 mb-30 transition-4 text-center">
                        <a href="" class="black">
                            <div class="service-icn bg-light-white flex-center">
                                <img src="img/service/pinkshoe.png" alt="">
                            </div>
                            <div class="service-text">
                                <h3 class="fs-20 f-700 mb-10">SHOE LAUNDRY</h3>
                                <p class="mb-0">72 hrs Turnaround time
                                    Wash, Dry &amp; Steam Ironing
                                    Stain Removal
                                    Cuff &amp; Collar Cleaning
                                    Fabric Conditioner
                                    Eco Friendly Combined Packing
                                    Doorstep Pickup &amp; Delivery </p>
                                <span class="line-servcie transition-4 bg-blue mt-5"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-6">
                    Do you want to get more details
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary">Contact Us</button>
                </div>
            </div>
            </div>
        </div>       
    </div>
    
</div>

@include('layouts.front-footer')
@endsection