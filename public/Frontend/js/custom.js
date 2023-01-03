$(document).ready(function(){
    loadcart();
    loadwishlist();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function loadcart(){
        $.ajax({
            method:"GET",
            url:"/load-cart-data",
            success:function(response){
                $('.cart-count').html('');
                $('.cart-count').html(response.code);
            }
        })
    }
    function loadwishlist(){
        $.ajax({
            method:"GET",
            url:"/load-wishlist-data",
            success:function(response){
                $('.wishlist-count').html('');
                $('.wishlist-count').html(response.code);
            }
        })
    }
    function addtocartbutton (prod_id, inc_value){
        $.ajax ({
            method: 'POST',
            url: '/add-to-cart',
            data: {
            product_id: prod_id,
            product_qty: inc_value,
            },
            dataType: '',
            success: function (response) {
            //swal ('', response.status, 'success');
            loadcart ();
            },
        });
    }
    $ ('.AddtoCartBtn').click (function (e) {
        e.preventDefault ();
        var product_id = $ (this).closest('.product_data').find ('.prod_id').val ();
        var product_qty = $ (this).closest('.product_data').find ('.qty-input').val ();
        $.ajax ({
            method: 'POST',
            url: '/add-to-cart',
            data: {
            product_id: product_id,
            product_qty: product_qty,
            },
            dataType: '',
            success: function (response) {
            swal ('', response.status, 'success');
            loadcart ();
            },
        });
    });


 
    $('.Addtowishlist').click(function(e){
        e.preventDefault();
        var product_id=$(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method:"POST",
            url:"/add-to-wishlist",
            data:{
                'product_id':product_id,
            },
            success:function(response){
                swal("",response.status,"success");
                loadwishlist();
            }
        })
    })

    $('.increament-btn').click(function(e){
        e.preventDefault();
        var inc_value=$(this).closest('.product_data').find('.qty-input').val();
        var prod_id = $(this).closest ('.product_data').find ('.prod_id').val ();
        var value=parseInt(inc_value,10);
        value=isNaN(value)?0:value;
        if(value<10){
            value++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
        addtocartbutton (prod_id,inc_value);
        window.location.reload ();
    })
    $('.decreament-value').click(function(e){
        e.preventDefault();
       
        var dc_value=$(this).closest('.product_data').find('.qty-input').val();
        var prod_id = $ (this).closest ('.product_data').find ('.prod_id').val ();
        var value=parseInt(dc_value,10);
        value=isNaN(value)?0:value;
        if(value>1){
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
        addtocartbutton (prod_id, inc_value);
        window.location.reload ();
    })
    $('.delete-cart-item').click(function(e){
        e.preventDefault();
        var prod_id=$(this).closest('.product_data').find('.prod_id').val();
        var prod_qty=$(this).closest('.product_data').find('.qty-input').val();
        $.ajax({
            method:'post',
            url:'delete-cart-item',
            data:{
                'prod_id':prod_id,
                'prod_qty':prod_qty
            },
            success:function(response){
                window.location.reload();
                swal("",response.status,"success");
                loadcart();
            }
        })
    });
    $('.remove-wishlist-item').click(function(e){
        e.preventDefault();
        var prod_id=$(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method:'post',
            url:'delete-wishlist-item',
            data:{
                'prod_id':prod_id,
            },
            success:function(response){
                window.location.reload();
                swal("",response.status,"success");
            }
        })
    });
    $('.changeQuantity').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var prod_id=$(this).closest('.product_data').find('.prod_id').val();
        var prod_qty=$(this).closest('.product_data').find('.qty-input').val();
        $.ajax({
            method:'post',
            url:'update-cart-item',
            data:{
                'prod_id':prod_id,
                'prod_qty':prod_qty
            },
            success:function(response){
               // window.location.reload();
               // alert(response)
            }
        })
    });
})