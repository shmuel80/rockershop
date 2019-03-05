$('.ms_box').delay(3000).slideUp;

$('.addToCart').on('click',function(){

    var id = $(this).data('id');

    $.ajax({
        url: base_url + "/shop/addToCart",
        dataType: "html",
        type: "get",
        data:{
            product_id: id
        },

        success: function(){
           location.reload();
        }
    })
    
});

$('.updatecart').on('click',function(){

    var id = $(this).data('id');
    var val = $(this).val();

    $.ajax({
        url: base_url + "/shop/updateCart",
        dataType: "html",
        type: "get",
        data:{
            product_id: id,
            op: val
        },

        success: function(){
           location.reload();
        }
    })
    
});