$(document).ready(function(){
    $('.razor-pay-btn').click(function(e){
        e.preventDefault();
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
        var additional_message=$('.additional_message').val();
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
        if(!additional_message){
            additional_message="Message field is required";
            $("#additional_message").html('');
            $("#additional_message").html(additional_message);
        }else{
            additional_message="";
            $("#additional_message").html('');
        }
        if(fname_error!="" || lname_error!="" || email_error!="" ||phone_error!="" || address1_error!="" ||address2_error!="" || city_error!="" ||state_error!="" || country_error!="" || pincode_error!="" ||additional_message!=""){
            return false;
        }else{
            $.ajax({
                method:"POST",
                url:"/proceed-to-pay",
                data:{
                    'firstname':firstname,
                    'lastname':lastname,
                    'email':email,
                    'phone':phone,
                    'address1':address1,
                    'address2':address2,
                    'city':city,
                    'state':state,
                    'country':country,
                    'pincode':pincode,
                    'message':additional_message,
                },
                success:function(response){
                    var options = {
                        "key": "rzp_test_Ms9sZyby0hUtXh", // Enter the Key ID generated from the Dashboard
                        "amount": 1*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        "currency": "INR",
                        "name": response.firstname+' '+response.lastname,
                        "description": "Thank You for choossing Us",
                        "image": "https://example.com/your_logo", 
                        "handler":function(response1){
                            $.ajax({
                                method:"POST",
                                url:"place-order",
                                data:{
                                    'fname':response.firstname,
                                    'lname':response.lastname,
                                    'email':response.email,
                                    'phone':response.phone,
                                    'address1':response.address1,
                                    'address2':response.address2,
                                    'city':response.city,
                                    'state':response.state,
                                    'country':response.country,
                                    'pincode':response.pincode,
                                    'total_price':response.total_price,
                                    'payment_mode':'Pay with Razarpay',
                                    'payment_id':response1.razorpay_payment_id
                                },
                                success:function(responseb){
                                    swal(responseb.status);
                                    window.location.href="/";
                                }
                            })
                        },
                        "prefill": {
                            "name":  response.firstname+' '+response.lastname,
                            "email":  response.email,
                            "contact": response.phone
                        },
                        "notes": {
                            "address": "Razorpay Corporate Office"
                        },
                        "theme": {
                            "color": "#3399cc"
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                    
                }
            })
        }
    })
})