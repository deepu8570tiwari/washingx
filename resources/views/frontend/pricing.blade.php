@extends('layouts.front')
@section('title')
        Our Pricing
    @endsection
@section('content')
<div class="py-3   border-top">
    <div class="container">
        <div class="mb-0">
            <a href="{{url('/')}}">
                Home
            </a>/
            <a href="{{url('/pricing')}}">
                Pricing
            </a>
        </div>
    </div>
</div>



<div class="container">
   <div class="row">
      
      <!-- Purple Table -->
      <div class="col-md-4">
         <div class="pricing-table purple">
            <!-- Table Head -->
            <div class="pricing-label">Fixed Price</div>
            <h2>GENTLEMEN DRY-CLEANING</h2>
            <h5>Add-ons</h5>
            <!-- Features -->
            <div class="pricing-features">
               <div class="feature">Suit (3 Piece)<span>500 INR</span></div>
               <div class="feature">Suit (2 Piece)<span>425 INR</span></div>
               <div class="feature">Coat/Blazer<span>300 INR</span></div>
               <div class="feature">Over Coat<span>125 INR</span></div>
               <div class="feature">Sweater (Light/Heavy)<span>250/300 INR</span></div>
            </div>
            <!-- Price -->
            <!-- Button -->
            <a class="price-button" href="#">Get Started</a>
         </div>
      </div>
      <!-- Turquoise Table -->
      <div class="col-md-4">
         <div class="pricing-table turquoise">
            <!-- Table Head -->
            <div class="pricing-label">Fixed Price</div>
            <h2>HOME FURNISHING DRY-CLEANING</h2>
            <h5>Add-ons</h5>
            <!-- Features -->
            <div class="pricing-features">
               <div class="feature">Shirt/T-shirt<span>150 INR</span></div>
               <div class="feature">Shorts/Skirt/Frock<span>25 INR</span></div>
               <div class="feature">Trouser<span>500 INR</span></div>
               <div class="feature">Salwar Kameez<span>50 INR</span></div>
               <div class="feature">Jacket<span>150 INR</span></div>
            </div>
            <!-- Price -->
           
            <!-- Button -->
            <a class="price-button" href="#">Get Started</a>
         </div>
      </div>
      <!-- Red Table -->
      <div class="col-md-4">
         <div class="pricing-table red">
            <!-- Table Head -->
            <div class="pricing-label">Fixed Price</div>
            <h2>HOME FURNISHING DRY-CLEANING</h2>
            <h5>Add-ons</h5>
            <!-- Features -->
            <div class="pricing-features">
               <div class="feature">Shirt/T-shirt<span>150 INR</span></div>
               <div class="feature">Shorts/Skirt/Frock<span>25 INR</span></div>
               <div class="feature">Trouser<span>500 INR</span></div>
               <div class="feature">Salwar Kameez<span>50 INR</span></div>
               <div class="feature">Jacket<span>150 INR</span></div>
            </div>
            <!-- Price -->
            <!-- Button -->
            <a class="price-button" href="#">Get Started</a>
         </div>
      </div>
   </div>
</div>

 @include('layouts.front-footer')
@endsection