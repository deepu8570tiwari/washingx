@extends('layouts.front')
@section('title')
        Pickup Sechedule
    @endsection
@section('content')
<div class="py-3   border-top">
    <div class="container">
        <div class="mb-0">
            <a href="{{url('/')}}">
                Home
            </a>/
            <a href="{{url('/pickup')}}">
               Schedule Your Pickup
            </a>
        </div>
    </div>
</div>
<section class="vh-100" >
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
        <div class="card-body">
            <div class="row justify-content-center">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Book Your Time Slots</p>
            <div class="col-md-12 col-lg-6 col-xl-5 order-2 order-lg-1">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
               
                <form method="POST" action="{{ url('pickupschedule') }}" class="mx-1 mx-md-4">
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fa fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required class="form-control"  placeholder="Your Name"/>
                         
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fa fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                        <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control" placeholder="Your Email"/>
                       
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fa fa-phone fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                        <input id="telphone" type="tel" class="form-control" name="telephone" required  class="form-control" placeholder="Phone Number" />
                            
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fa fa-map-marker fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <textarea id="address" class="form-control " name="address" value="" placeholder="Enter your address"></textarea>
                           
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fa fa-calendar fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <input type="date" id="pickupdate" class="form-control " name="date" value="">
                           
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fa fa-clock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <input type="time" id="availabletime" class="form-control" name="time" value="">
                           
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg">Contact with Us</button>
                    </div>

                </form>
                
            </div>
            @if(session()->has('success'))
                    <div class="alert alert-success text-center">
                    {{ session()->get('success') }}
                    </div>
                @endif
            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                class="img-fluid" alt="Sample image">
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>

@include('layouts.front-footer')
@endsection