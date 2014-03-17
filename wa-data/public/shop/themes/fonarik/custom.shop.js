$(document).ready(function () {

  
    $("form.addtocart").submit(function () {
        var f = $(this);
        $.post(f.attr('action'), f.serialize(), function (response) {
            if (response.status == 'ok') {
                var cart_total = $(".cart-total");
				var cart_count = $("#cart_count");
                f.children('input[type=submit]').val('В корзине');
				f.children('input[type=submit]').css('background-color','#093');
				cart_total.html(response.data.total);	
                cart_count.html(response.data.count + ' товаров');
            }
        }, "json");
        return false;
    });

});
