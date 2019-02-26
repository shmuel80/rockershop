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