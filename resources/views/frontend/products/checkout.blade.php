@extends('layouts.front')
    @section('title')
     Checkout
    @endsection
    @section('content')
    <div class="py-3   border-top">
        <div class="container">
            <div class="mb-0">
                <a href="{{url('/')}}">
                    Home
                </a>/
                <a href="{{url('/checkout')}}">
                    Checkout
                </a>
            </div>
        </div>
    </div>
   
    <div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{url('place-order')}}" method="post">
            {{csrf_field()}}
            
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>

                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control firstname" name="fname" value="{{Auth::user()->name}}" placeholder="Enter First name">
                                <span id="fname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control lastname" name="lname" value="{{Auth::user()->lastname}}" placeholder="Enter Last name">
                                <span id="lname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control email" name="email" value="{{Auth::user()->email}}" placeholder="Enter Email">
                                <span id="email_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control phone" name="phone" value="{{Auth::user()->phone}}" placeholder="Enter Phone number">
                                <span id="phone_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Address 1</label>
                                <input type="text" class="form-control address1" name="address1" value="{{Auth::user()->address1}}" placeholder="Enter Address">
                                <span id="address1_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Address 2</label>
                                <input type="text" class="form-control address2" name="address2" value="{{Auth::user()->address2}}" placeholder="Enter Address 2">
                                <span id="address2_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">City</label>
                                <input type="text" class="form-control city" name="city" value="{{Auth::user()->city}}" placeholder="Enter City">
                                <span id="city_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">State</label>
                                <input type="text" class="form-control state" name="state" placeholder="Enter State" value="{{Auth::user()->state}}">
                                <span id="state_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Country</label>
                                <input type="text" class="form-control country" name="country" placeholder="Enter Country" value="{{Auth::user()->country}}">
                                <span id="country_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Pin Code</label>
                                <input type="text" class="form-control pincode" name="pincode" placeholder="Enter Pin Code" value="{{Auth::user()->pincode}}">
                                <span id="pincode_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="">Message</label>
                                <textarea class="form-control additional_message" name="additional_message" placeholder="Additional Message" value=""></textarea>
                                <span id="additional_message" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Order Details</h6>
                        <hr>
                        @php $total=0; @endphp
                        @if($cart_item->count()>0)
                        <table class="table table-stripped table-ordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            @foreach($cart_item as $cart_items)
                            <tr>
                                <td>
                                    {{$cart_items->product->name}}
                                </td>
                                <td>
                                    {{$cart_items->prod_qty}}
                                </td>
                                <td>
                                    {{$cart_items->product->selling_price}}
                                </td>
                            </tr>
                            @php $total+=$cart_items->product->selling_price * $cart_items->prod_qty;@endphp
                            @endforeach
                            </tbody>
                        </table>
                       
                        
                        
                       
                        <h6 class="px-2">Grand Total <span class="float-end">Rs:{{$total}}</span> </h6>
                        <input type="hidden" name="payment_mode" value="Pay with COD">
                        <button type="submit" class="btn btn-primary float-end w-100 bg-primary">Place Order</button>
                        <button type="button" class="btn btn-primary float-end w-100 mt-3 mb-3 bg-success razor-pay-btn">Pay with Razorpay</button>
                        <div id="paypal-button-container"></div>
                       
                            @else
                            <h6>No Proudcts in cart</h6>
                            @endif
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    @endsection

    @section('scripts')
    <script>
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                amount: {
                    value: "1" // Can also reference a variable or function
                }
                }]
            });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
            return actions.order.capture().then(function(details) {
                var firstname=$('.firstname').val();
                var lastname=$('.lastname').val();
                var email=$('.email').val();
                var phone=$('.phone').val();
                var address1=$('.address1').val();
                var address2=$('.address2').val();
                var city=$('.city').val();
                var state=$('.state').val();
                var country=$('.country').val();
                var pincode=$('.pincode').val();
                if(!firstname){
                    fname_error="First name is required";
                    $("#fname_error").html('');
                    $("#fname_error").html(fname_error);
                }else{
                    fname_error="";
                    $("#fname_error").html('');
                }
                if(!lastname){
                    lname_error="Last name is required";
                    $("#lname_error").html('');
                    $("#lname_error").html(lname_error);
                }else{
                    lname_error="";
                    $("#lname_error").html('');
                }
                if(!email){
                    email_error="Email name is required";
                    $("#email_error").html('');
                    $("#email_error").html(email_error);
                }else{
                    email_error="";
                    $("#email_error").html('');
                }
                if(!phone){
                    phone_error="Phone number is required";
                    $("#phone_error").html('');
                    $("#phone_error").html(phone_error);
                }else{
                    phone_error="";
                    $("#phone_error").html('');
                }
                if(!address1){
                    address1_error="Address1 Fields is required";
                    $("#address1_error").html('');
                    $("#address1_error").html(address1_error);
                }else{
                    address1_error="";
                    $("#address1_error").html('');
                }
                if(!address2){
                    address2_error="Address2 field is required";
                    $("#address2_error").html('');
                    $("#address2_error").html(address2_error);
                }else{
                    address2_error="";
                    $("#address2_error").html('');
                }
                if(!city){
                    city_error="City field is required";
                    $("#city_error").html('');
                    $("#city_error").html(city_error);
                }else{
                    city_error="";
                    $("#city_error").html('');
                }
                if(!state){
                    state_error="State field is required";
                    $("#state_error").html('');
                    $("#state_error").html(state_error);
                }else{
                    state_error="";
                    $("#state_error").html('');
                }
                if(!country){
                    country_error="Country field is required";
                    $("#country_error").html('');
                    $("#country_error").html(country_error);
                }else{
                    country_error="";
                    $("#country_error").html('');
                }
                if(!pincode){
                    pincode_error="Pincode field is required";
                    $("#pincode_error").html('');
                    $("#pincode_error").html(pincode_error);
                }else{
                    pincode_error="";
                    $("#pincode_error").html('');
                }
                if(fname_error!="" || lname_error!="" || email_error!="" ||phone_error!="" || address1_error!="" ||address2_error!="" || city_error!="" ||state_error!="" || country_error!="" || pincode_error!=""){
                    return false;
                }else{
                        $.ajax({
                            method:"POST",
                            url:"place-order",
                            data:{
                                'fname':firstname,
                                'lname':lastname,
                                'email':email,
                                'phone':phone,
                                'address1':address1,
                                'address2':address2,
                                'city':city,
                                'state':state,
                                'country':country,
                                'pincode':pincode,
                                'total_price':'1',
                                'payment_mode':'Pay with Paypal',
                                'payment_id':details.id
                            },
                            success:function(response){
                                swal(response.status);
                                window.location.href="/my-order";
                            }
                        })
                    }
                // When ready to go live, remove the alert and show a success message within this page. For example:
                // const element = document.getElementById('paypal-button-container');
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');
            });
            }
        }).render('#paypal-button-container');
    </script>
    @endsection